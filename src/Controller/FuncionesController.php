<?php

namespace App\Controller;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class FuncionesController extends AbstractController
{

    /**
     * @Route("/login/{email}", name="app_loginBasico")
     */
    public function loginBasico($email)
    {
        $em = $this->getDoctrine()->getManager();
        $user = null;
        $user= $em->getRepository(User::class)->find(2);
        
        if($user != null){
            $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
            $this->get('security.token_storage')->setToken($token);
            $this->get('session')->set('_security_main', serialize($token));
        }
        
        return $this->redirectToRoute('documentos');
    }

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
                $user->setAccesoDocumentos('Público');
                
                //Hacemos cambios en ROLES, si es USER, lo pasamos a Lector.
                $user->setRoles($this->nuevoRol($rolForm));

                $user->setEstado($estado);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
                $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                $this->get('security.token_storage')->setToken($token);
                $this->get('session')->set('_security_main', serialize($token));
        }else{
            foreach ($users as  $user){
                $cambioRol=$this->cambiarRol($rolForm,$user->getRoles());
                $user->setRoles($cambioRol);
                $token = new UsernamePasswordToken($user, null, 'main', $cambioRol);
                $this->get('security.token_storage')->setToken($token);
                $this->get('session')->set('_security_main', serialize($token));
                $em->flush($user);
            }
        }
        
        return $this->redirectToRoute('documentos');
    }

    public function nuevoRol($rolesACambiar){
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
    public function cambiarRol($rolesACambiar,$rolEnDocumentos){
        $roles=json_decode($rolesACambiar,TRUE);
        $nuevoRol = [];
        foreach ((array) $roles as $rol ){
            if($rol == "ROLE_USER"){
                array_push($nuevoRol,"ROLE_LECTOR");
            }
            if (in_array($rol, $rolEnDocumentos) && $rol != "ROLE_USER") {
                //if($rol == "ROLE_ADMIN"){
                    //array_push($nuevoRol,"ROLE_EDITOR"); HAY QUE VER REALMENTE, SI UN ADMIN ES TAMBIÉN EDITOR.
                //}
                if(in_array("ROLE_EDITOR", $rolEnDocumentos)){
                    array_push($nuevoRol,"ROLE_EDITOR");
                }else{
                    array_push($nuevoRol,$rol);
                }
            }
        }
        foreach($rolEnDocumentos as $rol){
            //Condicional para que no se repitan 
            if(!in_array($rol, $nuevoRol)){
                //Se agrega a nuevo Rol
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
