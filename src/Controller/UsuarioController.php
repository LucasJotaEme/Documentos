<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\UserBusqueda;
use App\Form\BusquedaUserType;
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
     * @Route("/admin/cambioLector/{id}", name="cambioLector")
     */
    public function cambioLector(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario= $em->getRepository(User::class)->find($id);

        $usuario->setRoles(['ROLE_LECTOR']);
            
        $em->flush($usuario);
        $this->addFlash('correcto', 'Se cambió el permiso a LECTOR');
        return $this->redirectToRoute('usuarios');
    }

    /**
     * @Route("/admin/cambioEditor/{id}", name="cambioEditor")
     */
    public function cambioEditor(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario= $em->getRepository(User::class)->find($id);

        $usuario->setRoles(['ROLE_LECTOR','ROLE_EDITOR']);
            
        $em->flush($usuario);
        $this->addFlash('correcto', 'Se cambió el permiso a EDITOR');
        return $this->redirectToRoute('usuarios');
    }

    /**
     * @Route("/admin/cambioAdmin/{id}", name="cambioAdmin")
     */
    public function cambioAdmin(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario= $em->getRepository(User::class)->find($id);

        $usuario->setRoles(['ROLE_LECTOR','ROLE_EDITOR','ROLE_ADMIN']);
            
        $em->flush($usuario);
        $this->addFlash('correcto', 'Se cambió el permiso a ADMIN');
        return $this->redirectToRoute('usuarios');
    }

    /**
     * @Route("/admin/cambioSuperadmin/{id}", name="cambioSuperadmin")
     */
    public function cambioSuperadmin(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario= $em->getRepository(User::class)->find($id);

        $usuario->setRoles(['ROLE_LECTOR','ROLE_EDITOR','ROLE_ADMIN','ROLE_SUPERADMIN']);
            
        $em->flush($usuario);
        $this->addFlash('correcto', 'Se cambió el permiso a SUPERADMIN');
        return $this->redirectToRoute('usuarios');
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
