<?php

namespace App\Controller\Cabinet;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/cabinet/operations')]
#[IsGranted('ROLE_USER')]
class OperationsController extends AbstractController
{
    #[Route('/', name: 'app_cabinet_operations')]
    public function index(): Response
    {
        return $this->render('cabinet/operations/index.html.twig', [
            'controller_name' => 'OperationsController',
        ]);
    }
}
