<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\UserBusqueda;
use App\Form\BusquedaUserType;
use App\Form\UserType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends AbstractController
{
    /**
     * @Route("/admin/usuarios", name="usuarios")
     */
    public function usuarios(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $form = $this->createForm(BusquedaUserType::class,new UserBusqueda());
        $form->handleRequest($request);
        $busqueda=$form->getData();


        $usuarios= $em->getRepository(User::class)->findAll();
        
        if ($form->isSubmitted()){
            return $this->render('usuario/usuario.html.twig', [
            'usuarios' => $this->buscarUsuarios($busqueda),'formulario' => $form->createView()
        ]);
        }
        else{
            return $this->render('usuario/usuario.html.twig', [
                'usuarios' => $usuarios,'formulario' => $form->createView()
            ]);
        }
    }

    /**
     * @Route("/admin/modificarUser/{id}/", name="modificarUser")
     */
    public function modificarUser(Request $request,$id)
    {
        $manager = $this->getDoctrine()->getManager();
        
        
        $usuario = $manager->getRepository(User::class)->find($id); 
        
        $form = $this->createForm(UserType::class,$usuario);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $this->validarUsuario($usuario)){

            $usuario = $form->getData();
            $manager->flush();

            //Cambio de ROLES
            if ($usuario->getRolString()=="Lector"){
                $this->cambioLector($usuario);
            }else if ($usuario->getRolString()=="Editor"){
                $this->cambioEditor($usuario);
            }else if ($usuario->getRolString()=="Admin"){
                $this->cambioAdmin($usuario);
            }else{
                $this->cambioSuperadmin($usuario);
            }
            // ....
            $this->addFlash('correcto', 'Se modificó el usuario correctamente');

            return $this->redirectToRoute('usuarios');
        }
        else{
            return $this->render('usuario/editar.html.twig', [
            'formulario' => $form->createView(),'usuario' => $usuario
        ]);
        }
    }

    public function validarUsuario($usuario){
        $usuarioActual= $this->getUser()->getRolString();
        if ($usuario->getRolString()=="Superadmin" && $usuarioActual != "Superadmin") {
            $this->addFlash('error', 'No tiene los permisos suficientes como para dar permisos SUPERADMIN');
            return false;
        }else{
            return true;
        }
    }

    public function cambioLector($usuario)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario->setRoles(['ROLE_LECTOR']);
            
        $em->flush($usuario);
    }

    public function cambioEditor($usuario)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario->setRoles(['ROLE_LECTOR','ROLE_EDITOR']);
            
        $em->flush($usuario);
    }

    public function cambioAdmin($usuario)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario->setRoles(['ROLE_LECTOR','ROLE_ADMIN']);
            
        $em->flush($usuario);
    }

    public function cambioSuperadmin($usuario)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario->setRoles(['ROLE_LECTOR','ROLE_EDITOR','ROLE_ADMIN','ROLE_SUPERADMIN']);
            
        $em->flush($usuario);
    }

    //############### FUNCIONES #####################

    public function buscarUsuarios(UserBusqueda $busqueda){
        
        $manager=$this->getDoctrine()->getManager();
        
        $query = $manager->createQuery(
        "SELECT u
        FROM App\Entity\User u
        WHERE u.email LIKE :email
        ORDER BY u.id DESC
        "
        )->setParameter('email',$busqueda->getBuscar().'%');
        
        //Límite de resultados..
        $query->setMaxResults(100);
        
        //Retorna busqueda de la compra..
        return $query->getResult();
    }
}
