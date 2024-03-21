<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Event\LogoutEvent;

class LogoutListener
{
    public function __invoke(LogoutEvent $event): void
    {
        $res = $event->getRequest()->get('redirect');
        $event->setResponse(new RedirectResponse($res));
    }
}
