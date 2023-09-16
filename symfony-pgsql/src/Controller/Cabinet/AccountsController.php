<?php

namespace App\Controller\Cabinet;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountsController extends AbstractController
{
    #[Route('/cabinet/accounts', name: 'app_cabinet_accounts')]
    public function index(): Response
    {
        return $this->render('cabinet/accounts/index.html.twig', [
            'controller_name' => 'AccountsController',
        ]);
    }
}
