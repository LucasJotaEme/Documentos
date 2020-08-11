<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\DocumentoTipo;
use Symfony\Component\HttpFoundation\Request;
use App\Form\DocumentoTipoType;
use App\Form\BusquedaTipoType;
use App\Entity\Busqueda;

class DocumentoTipoController extends AbstractController
{
    /**
     * @Route("/admin/tipoDocumentos", name="documentosTipo")
     */
    public function index(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $formularioBusqueda = $this->createForm(BusquedaTipoType::class,new Busqueda());
        
        $documentosTipo= $entityManager->getRepository(DocumentoTipo::class)->findBy(
        array('estado' => 'Alta'));
        
        $documentoTipo = new DocumentoTipo();
        
        $formularioBusqueda->handleRequest($request);
        $busqueda=$formularioBusqueda->getData();
        
        $formulario = $this->createForm(DocumentoTipoType::class,$documentoTipo);
        $formulario->handleRequest($request);
        
        if ($formulario->isSubmitted() && $this->validarDocumentoTipo($documentoTipo)){
            
            $entityManager = $this->getDoctrine()->getManager();
            $documentoTipo = $formulario->getData();
            $documentoTipo->setEstado('Alta');
            $entityManager->persist($documentoTipo);
            $entityManager->flush();
            $documentosTipo= $entityManager->getRepository(DocumentoTipo::class)->findBy(
            array('estado' => 'Alta'));
            
            return $this->render('documento_tipo/documentosTipo.html.twig', [
            'documentos' => $documentosTipo,
            'formulario' => $formulario->createView(),
            'formularioBusqueda' => $formularioBusqueda->createView()
            ]);
        }else if ($formularioBusqueda->isSubmitted()){
            
            return $this->render('documento_tipo/documentosTipo.html.twig', [
            'documentos' => $this->buscarDocumento($busqueda),'formulario' => $formulario->createView(),'formularioBusqueda' => $formularioBusqueda->createView()
        ]);
        }else{
        
        return $this->render('documento_tipo/documentosTipo.html.twig', [
            'documentos' => $documentosTipo,
            'formulario' => $formulario->createView(),
            'formularioBusqueda' => $formularioBusqueda->createView()
        ]);
        }
    }
    
    public function buscarDocumento($busqueda){
        
        $manager=$this->getDoctrine()->getManager();
        
        $query = $manager->createQuery(
        "SELECT c
        FROM App\Entity\documentoTipo c
        WHERE c.nombre LIKE :numero AND c.estado = 'Alta'
        ORDER BY c.id DESC
        "
        )->setParameter('numero',$busqueda->getBuscar().'%');
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();
    }

    
    /**
     * @Route("/admin/nuevoDocumentoTipo", name="nuevoDocumentoTipo")
     */
    public function nuevoDocumentoTipo(Request $request)
    {
        $documentoTipo = new DocumentoTipo();
        
        $formulario = $this->createForm(DocumentoTipoType::class,$documentoTipo);
        $formulario->handleRequest($request);

        $documentoTipo = $formulario->getData();
        
        if ($formulario->isSubmitted()){
            
            $entityManager = $this->getDoctrine()->getManager();
            $documentoTipo->setEstado('Alta');
            $entityManager->persist($documentoTipo);
            $entityManager->flush();
            $this->addFlash('correcto', 'Se creó un nuevo tipo de documento');
            return $this->redirectToRoute();
        }else{
            return $this->render('documento_tipo/documentosTipo.html.twig', [
                'formulario' => $formulario->createView()
            ]);
        }
    }

    private function validarDocumentoTipo($documentoTipo){
        if ($documentoTipo->getNombre() == "") {
            $this->addFlash('error', 'No es válido.');
            return false;
        } else if ($documentoTipo->getAbreviacion() == "") {
            $this->addFlash('error', 'No es válido');
            return false;
        } else if (strlen($documentoTipo->getAbreviacion()) > strlen($documentoTipo->getNombre())) {
            $this->addFlash('error', 'La abreviación no puede ser mayor que el nombre.');
            return false;
        }else{
            return true;
        }
    }
    
    /**
     * @Route("/admin/modificarDocumentoTipo/{id}", name="modificarDocumentoTipo")
     */
    public function modificarDocumento(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documentoTipo = $entityManager->getRepository(DocumentoTipo::class)->find($id);
        
        $formulario = $this->createForm(DocumentoTipoType::class,$documentoTipo);
        $formulario->handleRequest($request);
        
        if ($formulario->isSubmitted() && $this->validarDocumentoTipo($documentoTipo)){
            $documentoTipo = $formulario->getData();
            $entityManager->flush($documentoTipo);
            return $this->redirectToRoute('documentosTipo');
        }
        return $this->render('documento_tipo/documentosTipoModificar.html.twig', [
            'formulario' => $formulario->createView()
        ]);
    }
    
    /**
     * @Route("/admin/eliminarDocumentoTipo/{id}", name="eliminarDocumentoTipo")
     */
    public function eliminarDocumento(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documentoTipo = $entityManager->getRepository(DocumentoTipo::class)->find($id);
        $documentoTipo->setEstado("Baja");
        $entityManager->flush($documentoTipo);      
        //$this->addFlash('correcto', 'Se ha dado de baja correctamente');      
        return $this->index($request);
    }
    
    
}
