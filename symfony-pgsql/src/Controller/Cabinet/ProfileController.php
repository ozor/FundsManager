<?php

namespace App\Controller\Cabinet;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/cabinet/profile', name: 'app_cabinet_profile')]
    public function index(): Response
    {
        return $this->render('cabinet/profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
}
