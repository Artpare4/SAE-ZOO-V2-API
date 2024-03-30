<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GetImageEventController extends AbstractController
{
    public function __invoke(Event $event): Response
    {
        $file = file_get_contents('./image/events/'.$event->getImgEvent(), true);
        $type = mime_content_type('./image/events/'.$event->getImgEvent());

        return new Response(
            $file,
            Response::HTTP_OK,
            ['content-type' => $type]
        );
    }
}
