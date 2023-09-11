<?php

namespace App\Controller\Cabinet;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/cabinet', name: 'app_cabinet_home')]
    public function index(): Response
    {
        return $this->render('cabinet/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
