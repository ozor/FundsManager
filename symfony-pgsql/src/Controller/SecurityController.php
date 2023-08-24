<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login()
    {
        // Логика для страницы входа
    }

    #[Route('/login_check', name: 'app_login_check')]
    public function loginCheck()
    {
        // Логика для проверки данных входа
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout()
    {
        // Логика для выхода
    }
}
