<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GetImageController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('get_image/index.html.twig', [
            'controller_name' => 'GetImageController',
        ]);
    }
}
