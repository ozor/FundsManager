<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Security $security): Response
    {
        $route = $security->isGranted('ROLE_USER') ? 'app_cabinet_home' : 'app_login';
        return $this->redirectToRoute($route);
    }
}
