<?php

namespace Xsanisty\ModuleManager\Command;

use SilexStarter\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ModuleAssetPublisherCommand extends Command
{
    protected function configure()
    {
        $this->setName('module:publish-asset')
             ->setDescription('Publish module asset into public directory');

        $this->addOption(
            'module',
            null,
            InputOption::VALUE_NONE,
            'If set, the command will publish assets of specific module'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
