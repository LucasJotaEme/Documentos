<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DocumentoController extends AbstractController
{
    /**
     * @Route("/documento", name="documento")
     */
    public function index()
    {
        return $this->render('documento/index.html.twig', [
            'controller_name' => 'DocumentoController',
        ]);
    }
}
