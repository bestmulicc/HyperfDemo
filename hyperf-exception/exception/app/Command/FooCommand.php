<?php

declare(strict_types=1);

namespace App\Command;

use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

/**
 * @Command
 */
#[Command]
class FooCommand extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    protected $coroutine = false;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('foo:test');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('My Demo Command');
    }

    public function handle()
    {
//        $this->output->writeln('<error>TEST COMMAND 1 !</error>');
//        $this->output->writeln('TEST COMMAND 2 !');
//        $value = $this->output->ask('Are you op ?','no');
//        $value = $this->output->choice('Are you op ?',['yes','no']);
//        $value = $this->output->confirm('Are you op ?',false);
//        $this->output->writeln((int)$value);
        $this->output->progressStart(100);
        for ($i = 0;$i < 10;$i++){
            $this->output->progressAdvance(10);
            sleep(1);
        }
        $this->output->progressFinish();
        $this->output->writeln('finish');
    }
}
