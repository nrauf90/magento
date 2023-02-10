<?php

namespace SNP\CLICustomCommand\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SNPCLICustomCommand extends Command
{
    const NAME = 'name';

    private $moduleName;

    /**
     * @return void
     */
    protected function configure()
    {
        parent::configure();

        $options = [
            new InputOption(
                self::NAME,
                null,
                InputOption::VALUE_REQUIRED,
                'Name'
            )
        ];
        $this->setName('snp:create:module');
        $this->setDescription('Create custom new module command');
        $this->setDefinition($options);
    }


    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getOption(self::NAME);
        if ($name) {

            $output->writeln("Welcome ".$name);
        } else {
            $output->writeln("Module name is required!");
        }

    }
}
