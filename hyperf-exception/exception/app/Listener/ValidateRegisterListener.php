<?php

declare(strict_types=1);

namespace App\Listener;

use App\Event\BeforeRegistered;
use Hyperf\Event\Annotation\Listener;
use Psr\Container\ContainerInterface;
use Hyperf\Event\Contract\ListenerInterface;

/**
 * @Listener
 */
#[Listener]
class ValidateRegisterListener implements ListenerInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function listen(): array
    {
        return [
            BeforeRegistered::class,
        ];
    }

    /**
     * @param BeforeRegistered $event
     */
    public function process(object $event)
    {
        $event->shouldRegister = (bool) rand(0,1);
        echo $event->shouldRegister.PHP_EOL;
    }
}
