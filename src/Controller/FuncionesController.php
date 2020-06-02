<?php

namespace App\Controller;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class FuncionesController extends AbstractController
{
    /**
     * @Route("/login/{email}/{rolForm}/{estado}", name="app_login")
     */
    public function login($email,$rolForm,$estado)
    {
        $em = $this->getDoctrine()->getManager();
        $users = null;
        $users= $em->getRepository(User::class)->findBy(['email'=>$email]);
        
        if($users == null){
                $user= new User();
                $user->setUltimoAcceso($this->getFechActual());
                $user->setEmail($email);
                $user->setRoles([$rolForm]);
                $user->setEstado($estado);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
                $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                $this->get('security.token_storage')->setToken($token);
                $this->get('session')->set('_security_main', serialize($token));
        }else{
            foreach ($users as  $user){
                $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                $this->get('security.token_storage')->setToken($token);
                $this->get('session')->set('_security_main', serialize($token));
            }
        }
        
        return $this->redirectToRoute('index');
    }
    
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('funciones/index.html.twig', [
            'controller_name' => 'FuncionesController',
        ]);
    }
    
    public function getFechActual(){
        $fechaActual=  new \DateTime();
        
        //Se le resta 3 horas a la fecha para que sea correcta a la actual. Desconozco el motivo
        $fechaActual->modify("-3 hours");
        
        return $fechaActual;
    }
}
