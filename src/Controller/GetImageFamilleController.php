<?php

namespace App\Controller;

use App\Entity\FamilleAnimal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GetImageFamilleController extends AbstractController
{
    public function __invoke(FamilleAnimal $familleAnimal): Response
    {
        $file = file_get_contents($familleAnimal->getImgFamille(), true);
        $type = mime_content_type($familleAnimal->getImgFamille());

        return new Response(
            $file,
            Response::HTTP_OK,
            ['content-type' => $type]
        );
    }
}
