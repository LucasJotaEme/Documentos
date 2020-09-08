<?php

namespace App\Controller;
use App\Entity\Grupo;
use App\Form\GrupoType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class GrupoController extends AbstractController
{
    /**
     * @Route("/admin/nuevoGrupo", name="nuevoGrupo")
     */
    public function nuevoGrupo(Request $request)
    {
        $grupo = new Grupo();
        $entityManager = $this->getDoctrine()->getManager();
        
        $formulario = $this->createForm(GrupoType::class,$grupo);
        $formulario->handleRequest($request);

        //Los grupos que hay
        $grupos= $entityManager->getRepository(Grupo::class)->findAll();

        $grupo = $formulario->getData();
        
        if ($formulario->isSubmitted()){
            
            $entityManager = $this->getDoctrine()->getManager();
            
            $entityManager->persist($grupo);
            $entityManager->flush();
            $this->addFlash('correcto', 'Se creó un nuevo grupo');
            return $this->redirectToRoute('documentosTipo');

        }else{
            return $this->render('grupo/nuevo.html.twig', [
                'formulario' => $formulario->createView(),'grupos' => $grupos
            ]);
        }
    }
}
