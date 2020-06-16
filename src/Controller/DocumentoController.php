<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Documento;
use App\Entity\Busqueda;
use App\Form\BusquedaType;
use App\Form\DocumentoType;
use Symfony\Component\HttpFoundation\Request;

class DocumentoController extends AbstractController
{
    /**
     * @Route("/getNovedades", name="getNovedades")
     */
    public function getNovedades(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documentos= $entityManager->getRepository(Documento::class)->findBy(
        array('estado' => 'Alta'));
        
        return $documentos;
    }
    
    /**
     * @Route("/", name="documentos")
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
            
        }else{ //Consulta por obsoletos
            
            return $this->getConsultaObsoletos($busqueda);
        }
    }
    
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
        WHERE c.numero LIKE :numero AND c.estado == 'Alta'
        ORDER BY c.id DESC
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
    
    /**
     * @Route("/documentosObsoletos", name="documentosObsoletos")
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
     * @Route("/nuevoDocumento", name="nuevoDocumento")
     */
    public function nuevoDocumento(Request $request)
    {
        $documento = new Documento();
        
        $formulario = $this->createForm(DocumentoType::class,$documento);
        $formulario->handleRequest($request);
        
        if ($formulario->isSubmitted()){
            
            $entityManager = $this->getDoctrine()->getManager();
            $documento = $formulario->getData();
            $documento->setEstado('Alta');
            $entityManager->persist($documento);
            $entityManager->flush();
            return $this->index($request);
        }
        return $this->render('documento/nuevoDocumento.html.twig', [
            'formulario' => $formulario->createView()
        ]);
    }
    
    /**
     * @Route("/verDocumento/{id}/", name="verDocumento")
     */
    public function verDocumentos(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $documentos= $em->getRepository(Documento::class)->findBy(['compraId'=>$id]);
        return $this->render('controlador_licitaciones/verDocumentos.html.twig',
            array('documentos'=>$documentos));
    }
    
    /**
     * @Route("/modificarDocumento/{id}", name="modificarDocumento")
     */
    public function modificarDocumento(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documento = $entityManager->getRepository(Documento::class)->find($id);
        
        $formulario = $this->createForm(DocumentoType::class,$documento);
        $formulario->handleRequest($request);
        
        if ($formulario->isSubmitted()){
            $documento = $formulario->getData();
            
            $entityManager->persist($documento);
            return $this->index($request);
        }
        return $this->render('documento/nuevoDocumento.html.twig', [
            'formulario' => $formulario->createView()
        ]);
    }
    
    /**
     * @Route("/eliminarDocumento/{id}", name="eliminarDocumento")
     */
    public function eliminarDocumento(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $documento = $entityManager->getRepository(Documento::class)->find($id);
        $documento->setEstado("Baja");
        $entityManager->flush();      
        //$this->addFlash('correcto', 'Se ha dado de baja correctamente');      
        return $this->index($request);
    }
}
