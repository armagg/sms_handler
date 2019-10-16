<?php


namespace App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SimpleCommand extends Command
{
    protected static $defaultName = 'app:simple-command';

    protected function configure()
    {
        parent::configure();
        $this->setDescription('here for some explanation of this command');

        $this->setHelp('some help to how this command run');
    }



    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo 'salam';
    }

}