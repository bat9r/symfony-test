<?php

namespace App\MessageHandler;

use App\Message\Work;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

#[AsMessageHandler(bus: 'default')]
final class WorkHandler
{
    public function __invoke(Work $message): string
    {
        // simulation of a time consuming task which doesn't use a lot of cpu or memory
        sleep(10);

        return 'success';
    }
}
