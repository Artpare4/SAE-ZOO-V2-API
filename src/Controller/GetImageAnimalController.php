<?php

namespace App\Controller;

use App\Entity\Animal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GetImageAnimalController extends AbstractController
{
    public function __invoke(Animal $animal): Response
    {
        $image = file_get_contents($animal->getImgAnimal());
        $type = mime_content_type($animal->getImgAnimal());

        return new Response(
            $image,
            Response::HTTP_OK,
            ['content-type' => $type]
        );
    }
}
