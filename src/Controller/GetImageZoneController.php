<?php

namespace App\Controller;

use App\Entity\ZoneParc;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GetImageZoneController extends AbstractController
{
    public function __invoke(ZoneParc $parc): Response
    {
        $file = file_get_contents($parc->getImgZone(), true);
        $type = mime_content_type($parc->getImgZone());

        return new Response(
            $file,
            Response::HTTP_OK,
            ['content-type' => $type]
        );
    }
}
