<?php

namespace App\Command;

use App\Message\Work;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsCommand(
    name: 'messenger:create-work-message',
    description: 'Creates a work message'
)]
class CreateWorkMessageCommand extends Command
{
    public function __construct(
        protected readonly MessageBusInterface $defaultBus,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('number-of-messages', InputArgument::OPTIONAL, 'The number of messages to dispatch', 1);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $numberOfMessages = (int) $input->getArgument('number-of-messages');

        while ($numberOfMessages-- > 0) {
            $this->defaultBus->dispatch(new Work());
        }

        return Command::SUCCESS;
    }
}
