<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Documento;
use App\Entity\Busqueda;
use App\Entity\PalabraClave;
use App\Form\BusquedaType;
use App\Form\DocumentoType;
use App\Form\DocumentoModificarType;
use Symfony\Component\HttpFoundation\Request;

class DocumentoController extends AbstractController
{   
    /**
     * @Route("/lector", name="documentos")
     */
    public function index(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $form = $this->createForm(BusquedaType::class,new Busqueda());
        $form->handleRequest($request);
        $busqueda=$form->getData();
        
        $documentos= $entityManager->getRepository(Documento::class)->findBy(
        array('estado' => 'Alta'));
        
        if ($form->isSubmitted()){
            return $this->render('documento/index.html.twig', [
            'documentos' => $this->buscarDocumento($busqueda),'formulario' => $form->createView()
        ]);
        }
        else{
            return $this->render('documento/index.html.twig', [
            'documentos' => $documentos,'formulario' => $form->createView()
        ]);
        }
    }
    
    public function buscarDocumento(Busqueda $busqueda){
        

        if ($busqueda->getFiltrarPor() == 2) { // Consulta por ultimos documentos publicados
            
            return $this->getConsultaUltimosPublicados($busqueda);
            
        }else if ($busqueda->getFiltrarPor() == 1){//Consulta por los más vistos
            
            return $this->getConsultaMasVistos($busqueda);
            
        }else if ($busqueda->getFiltrarPor() == 0){ //Consulta por obsoletos
            
            return $this->getConsultaObsoletos($busqueda);
        }else{
            return $this->getConsultaTodos($busqueda);
        }
    }
    
    /**
     * @Route("/lector/documentosObsoletos", name="documentosObsoletos")
     */
    public function documentosObsoletos(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documentos= $entityManager->getRepository(Documento::class)->findBy(
        array('estado' => 'Baja'));
        
        return $this->render('documento/index.html.twig', [
            'documentos' => $documentos,
        ]);
    }

    /**
     * @Route("/lector/verPDF/{id}", name="verPDF")
     */
    public function verPDF(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documento= $entityManager->getRepository(Documento::class)->find($id);
        $documento->setVistos($documento->getVistos()+1);
        $entityManager->flush($documento);
        
        return $this->redirect("http://localhost/Documentos/public/uploads/".$documento->getPath());
    }
    
    /**
     * @Route("/admin/nuevoDocumento", name="nuevoDocumento")
     */
    public function nuevoDocumento(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $fechaActual=  new \DateTime();
        $fechaActual->modify("-3 hours");


        $documento = new Documento();
        $documento->setNumeroVersion(1);

        $documento->setFechaPublicacion($fechaActual);
        $documento->setFechaCaducidad($fechaActual);


        $formulario = $this->createForm(DocumentoType::class,$documento);
        
        $palabrasBD= $entityManager->getRepository(PalabraClave::class)->findAll();
        $formulario->handleRequest($request);
        $documento = $formulario->getData();

        if ($formulario->isSubmitted() && $this->validarDocumento($documento)){
            
            $extensionArchivo=$documento->getPath()->guessExtension();
            $nombreArchivo= time().".".$extensionArchivo;
            $documento->getPath()->move("uploads",$nombreArchivo);
            $documento->setPath($nombreArchivo);

            

            $this->testPalabrasClaves($documento->getPalabraClave(),$palabrasBD);

            $documento->setEstado('Alta');
            $documento->setVistos(0);
            $documento->setFechaCreacion($fechaActual);
            $documento->setUser($this->getUser());
            $entityManager->persist($documento);
            $entityManager->flush();
            $this->crearLog($documento,'Nuevo');
            $this->addFlash('correcto', 'Se creó un nuevo documento.');
            //Se crea en novedades la nueva novedad
            if ($documento->getPerfil()=="Público"){
                $this->novedadIntranet($documento,"Nuevo");
            }
            return $this->redirectToRoute('documentos');
        }
        else{

            return $this->render('documento/nuevoDocumento.html.twig', [
                'formulario' => $formulario->createView()
            ]);
        }
    }

    private function novedadIntranet($documento,$estado){
        return $this->redirect("http://localhost/Intranet/public/index.php/novedad/"
        .$documento->getFechaPublicacion()->format('d-m-Y H:i:s')."/".$documento->getNumero()."/".$documento->getTitulo()."/".$this->getUser()->getId());
    }

    private function crearLog($documento,$estado){
        
        if ($estado == "Nuevo"){
            $fp = fopen("uploads/logs/nuevo/".$this->getFechActualString()."-iduser=".($this->getUser())->getId(), "x+");
        }else{
            $fp = fopen("uploads/logs/modificado/".$this->getFechActualString()."-iduser=".($this->getUser())->getId(), "x+");
        }
        $texto="";
        $texto.="------------------".$this->getFechActualString()."------------------\n";
        $texto.="Usuario:".$this->getUser()->getEmail()."\n";
        $texto.="Se creó el documento ".$documento->getNumero()." en el año ".$documento->getAnio()."\n";
        $texto.="Título: ".$documento->getTitulo()." en la versión ".$documento->getNumeroVersion()."\n";
        $texto.="Título: ".$documento->getTitulo()." en la versión ".$documento->getNumeroVersion()."\n";
        $texto.="Tipo de documento: ".$documento->getDocumentoTipo()->getNombre()."\n";
        $texto.="Fecha de publicación: ".$documento->getFechaPublicacion()->format("d-m-Y")."\n";
        $texto.="Fecha de caducidad: ".$documento->getFechaPublicacion()->format("d-m-Y")."\n";
        $texto.="--------------------FIN--------------------";
        if ($fp != 0){
            fwrite($fp, $texto);
        }

        fclose($fp);
    }

    public function validarDocumento($documento){
        $fechaActual=  new \DateTime();
        $fechaActual->modify("3 hours");
        if ($documento->getDocumentoTipo()->getNombre() == 'Seleccionar') {
            $this->addFlash('error', 'Debe seleccionar un tipo de documento');
            return false;
        } else if ($documento->getNumero() <= 0) {
            $this->addFlash('error', 'El campo número no puede ser 0.');
            return false;
        } else if ($documento->getAnio() < $this->getAnioActual() || $documento->getAnio()>($this->getAnioActual()+1) )  {
            $this->addFlash('error', 'El año no es válido');
            return false;
        } else if (!$documento->getFechaPublicacion()>=$fechaActual ) {
            $this->addFlash('error', 'La fecha de publicación no es válida.' .$fechaActual);
            return false;
        }else if ($documento->getFechaPublicacion()>$documento->getFechaCaducidad()){
            $this->addFlash('error', 'Fecha de caducidad es menor a fecha de publicación.');
            return false;
        }else if (strlen($documento->getTitulo()) <20){
            $this->addFlash('error', 'La cantidad de caracteres de campo título no es válida.');
            return false;
        }else {
            return true;
        }
    }
    
    /**
     * @Route("/admin/modificarDocumento/{id}", name="modificarDocumento")
     */
    public function modificarDocumento(Request $request,$id)
    {

        $entityManager = $this->getDoctrine()->getManager();
        
        $documento = $entityManager->getRepository(Documento::class)->find($id);

        //Si no hay archivo PDF nuevo, se carga de nuevo este
        $urlPDF = $documento->getPath();

        //Si se hace un submmit, se guarda la versión anterior del documento.
        $versionAnterior=$documento->getNumeroVersion();

        $documento->setNumeroVersion($documento->getNumeroVersion()+1);

        $formulario = $this->createForm(DocumentoModificarType::class,$documento);
        $formulario->handleRequest($request);
        
        //Se obtiene las palabras claves de la BD
        $palabrasBD= $entityManager->getRepository(PalabraClave::class)->findAll();
        
        if ($formulario->isSubmitted()&& $this->validarDocumento($documento)){

            $documento = $formulario->getData();

            if($documento->getPath()!=null){
                $extensionArchivo=$documento->getPath()->guessExtension();
                $nombreArchivo= time().".".$extensionArchivo;
                $documento->getPath()->move("uploads",$nombreArchivo);
                $documento->setPath($nombreArchivo);
            }else{
                $documento->setPath($urlPDF);
            }


            //Datos cuando se modifica el documento: Usuario modificador, fecha actual, y versión anterior.
            $documento->setFechaModificacion($this->getFechActual());
            $documento->setIdUserModificador($this->getUser()->getId());
            $documento->setVersionAnterior($versionAnterior);

            //Log de modificación
            $this->crearLog($documento,'Modificado');

            //Palabras claves
            $this->testPalabrasClaves($documento->getPalabraClave(),$palabrasBD);

            $entityManager->flush($documento);
            $this->addFlash('correcto', 'Se modificó el documento correctamente.');
            //Ver si realmente hace falta publicar.
            //if ($documento->getPerfil()=="Público"){
            //    $this->novedadIntranet($documento,"Modificado");
            //}
            return $this->redirectToRoute('documentos');
        }
        return $this->render('documento/modificarDocumento.html.twig', [
            'formulario' => $formulario->createView()
        ]);
    }
    
    /**
     * @Route("/admin/eliminarDocumento/{id}/{motivo}", name="eliminarDocumento")
     */
    public function eliminarDocumento(Request $request,$id,$motivo)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documento = $entityManager->getRepository(Documento::class)->find($id);
        $documento->setEstado("Baja");
        $documento->setMotivoObsoleto($motivo);
        $entityManager->flush();      
        $this->addFlash('correcto', 'Se dio de baja el documento.');      
        return $this->redirectToRoute('documentos');
    }

    /**
     * @Route("/admin/eliminarDefinitivo/{id}", name="eliminarDefinitivo")
     */
    public function eliminarDefinitivo(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documento = $entityManager->getRepository(Documento::class)->find($id);
        $entityManager->remove($documento);
        $entityManager->flush();      
        //$this->addFlash('correcto', 'Se ha dado de baja correctamente');      
        return $this->redirectToRoute('documentos');
    }

    /**
     * @Route("/lector/masDocumento/{id}", name="verMas")
     */
    public function masDocumento(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documento = $entityManager->getRepository(Documento::class)->find($id);

        return $this->render('documento/verMas.html.twig', [
            'documento' => $documento
        ]);
        
    }

    //--------------- CONSULTAS A PATA ----------------

    public function getConsultaUltimosPublicados($busqueda){
        
        $manager=$this->getDoctrine()->getManager();
        
        $query = $manager->createQuery(
        "SELECT c
        FROM App\Entity\Documento c
        WHERE c.numero LIKE :numero AND c.estado = 'Alta'
        ORDER BY c.id DESC
        "
        )->setParameter('numero',$busqueda->getBuscar().'%');
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();
    }
    
    public function getConsultaMasVistos($busqueda){
        
        $manager=$this->getDoctrine()->getManager();
        
        $query = $manager->createQuery(
        "SELECT c
        FROM App\Entity\Documento c
        WHERE c.numero LIKE :numero AND c.estado = 'Alta'
        ORDER BY c.vistos DESC
        "
        )->setParameter('numero','%'. $busqueda->getBuscar().'%');
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();
    }
    
    public function getConsultaObsoletos($busqueda){
        
        $manager=$this->getDoctrine()->getManager();
        
        $query = $manager->createQuery(
        "SELECT c
        FROM App\Entity\Documento c
        WHERE c.numero LIKE :numero AND c.estado = 'Baja'
        ORDER BY c.id DESC
        "
        )->setParameter('numero','%'. $busqueda->getBuscar().'%');
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();
    }

    public function getConsultaTodos($busqueda){
        
        $manager=$this->getDoctrine()->getManager();
        
        $query = $manager->createQuery(
        "SELECT c
        FROM App\Entity\Documento c
        WHERE c.numero LIKE :numero
        ORDER BY c.id DESC
        "
        )->setParameter('numero','%'. $busqueda->getBuscar().'%');
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();
    }

    //--------------------------- FUNCIONES --------------------------------------------

    public function testPalabrasClaves($palabrasClaves,$palabrasBD){

        $entityManager = $this->getDoctrine()->getManager();

        $arrayPalabrasClaves= preg_split("~;~", $palabrasClaves);

        foreach ($arrayPalabrasClaves as $palabra){
            if (!in_array($palabra, $palabrasBD)) {
                $clasPalabra= new PalabraClave();
                $clasPalabra->setNombre($palabra);
                if($palabra!=''){
                    $entityManager->persist($clasPalabra);
                }
            }
            $entityManager->flush();
        }
    }

    public function getFechActual(){
        $fechaActual=  new \DateTime();
        
        //Se le resta 3 horas a la fecha para que sea correcta a la actual. Desconozco el motivo
        $fechaActual->modify("-3 hours");
        
        return $fechaActual;
    }

    public function getFechActualString(){
        $fechaActual=  new \DateTime();
        
        //Se le resta 3 horas a la fecha para que sea correcta a la actual. Desconozco el motivo
        $fechaActual->modify("-3 hours");
        $fecha = $fechaActual->format('Y-m-d-H-i-s');
        return $fecha;
    }

    public function getAnioActual(){
        $fechaActual=  new \DateTime();
        $fechaActual->modify("-3 hours");
        $fecha = $fechaActual->format('Y');
        return $fecha;
    }
}
