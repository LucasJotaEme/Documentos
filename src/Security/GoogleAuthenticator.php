<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\GoogleUser;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use KnpU\OAuth2ClientBundle\Security\Authenticator\SocialAuthenticator;

class GoogleAuthenticator extends SocialAuthenticator
{
    
    public function start(Symfony \ Component \ HttpKernel \ Exception \ HttpException $authException = null)
    {
        $redireccion = new RedirectResponse('/');
        $redireccion->setTargetUrl('http://intranet.unraf.edu.ar/Intranet/public/index.php/login');
        return $redireccion;
    }
    
    

    
    
    
}
