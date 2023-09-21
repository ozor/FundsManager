<?php

namespace App\Controller\Cabinet;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/cabinet/reports')]
#[IsGranted('ROLE_USER')]
class ReportsController extends AbstractController
{
    #[Route('/', name: 'app_cabinet_reports')]
    public function index(): Response
    {
        return $this->render('cabinet/reports/index.html.twig', [
            'controller_name' => 'ReportsController',
        ]);
    }
}
