<?php

namespace App\Controller\Cabinet;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/cabinet/settings')]
#[IsGranted('ROLE_USER')]
class SettingsController extends AbstractController
{
    #[Route('/', name: 'app_cabinet_settings', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('cabinet/settings/index.html.twig', [
            'controller_name' => 'SettingsController',
        ]);
    }

    #[Route('/password', name: 'app_cabinet_settings_password', methods: ['GET', 'POST'])]
    public function password(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
    ): Response {
        /** @var User $user */
        $user = $this->getUser();

        $form = $this->createForm(ChangePasswordFormType::class, null, [
            'action' => $this->generateUrl('app_cabinet_settings_password'),
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$passwordHasher->isPasswordValid($user, $form->get('currentPassword')->getData())) {
                $this->addFlash('error', 'Current password is invalid');
                return $this->redirectToRoute('app_cabinet_settings_password');
            }

            $hashedPassword = $passwordHasher->hashPassword($user, $form->get('newPassword')->getData());
            $user->setPassword($hashedPassword);

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_cabinet_settings_password');
        }

        return $this->render('cabinet/settings/password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
