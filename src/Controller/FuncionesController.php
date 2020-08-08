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
                //Hacemos cambios en ROLES, si es USER, lo pasamos a Lector.
                $user->setRoles($this->cambiarRol($rolForm));

                $user->setEstado($estado);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
                $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                $this->get('security.token_storage')->setToken($token);
                $this->get('session')->set('_security_main', serialize($token));
        }else{
            foreach ($users as  $user){
                $cambioRol=$this->cambiarRol($rolForm);
                $user->setRoles($cambioRol);
                $token = new UsernamePasswordToken($user, null, 'main', $cambioRol);
                $this->get('security.token_storage')->setToken($token);
                $this->get('session')->set('_security_main', serialize($token));
                $em->flush($user);
            }
        }
        
        return $this->redirectToRoute('documentos');
    }

    public function cambiarRol($rolesACambiar){
        $roles=json_decode($rolesACambiar,TRUE);
        $nuevoRol = [];
        foreach ((array) $roles as $rol ){
            if($rol == "ROLE_USER"){
                array_push($nuevoRol,"ROLE_LECTOR");
            }else{
                array_push($nuevoRol,$rol);
            }
        }
        return $nuevoRol;  
    }
    
    /**
     * @Route("/back", name="backIntranet")
     */
    public function backIntranet()
    {
        $user = $this->getUser();
        
        if ($user != null){
            $url= "http://intranet.unraf.edu.ar/Intranet/public/index.php/login/" . $user->getEmail();    
        }else{
            $url= "http://intranet.unraf.edu.ar/Intranet/public/index.php/login/";    
        }
        
        return $this->redirect($url);
    }
    
    
 
    
    public function getFechActual(){
        $fechaActual=  new \DateTime();
        
        //Se le resta 3 horas a la fecha para que sea correcta a la actual. Desconozco el motivo
        $fechaActual->modify("-3 hours");
        
        return $fechaActual;
    }
}
