<?php

namespace App\Controller\Cabinet;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SettingsController extends AbstractController
{
    #[Route('/settings', name: 'app_cabinet_settings')]
    public function index(): Response
    {
        return $this->render('cabinet/settings/index.html.twig', [
            'controller_name' => 'SettingsController',
        ]);
    }

    #[Route('/settings/password', name: 'app_cabinet_settings_password')]
    public function password(): Response
    {
        return $this->render('cabinet/settings/password.html.twig', [
            'controller_name' => 'SettingsController',
        ]);
    }
}
