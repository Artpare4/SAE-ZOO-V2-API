<?php

namespace App\Controller;

use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/update', name: 'app_user_update')]
    public function update(Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_login');
        }
        $user = $this->getUser();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->remove('plainPassword');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $entityManager->flush();

            if ($redirect = $request->get('redirect')) {
                return new RedirectResponse($redirect);
            }
        }
        return $this->render('user/update.html.twig', [
            'controller_name' => 'UserController',
            'form' => $form,
        ]);
    }
}
