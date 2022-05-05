<?php

declare(strict_types=1);

namespace App\Listener;

use App\Event\BeforeRegistered;
use App\Event\UserRegistered;
use Hyperf\Event\Annotation\Listener;
use Psr\Container\ContainerInterface;
use Hyperf\Event\Contract\ListenerInterface;

/**
 * @Listener(priority=10)
 */
#[Listener]
class LogEventListener implements ListenerInterface
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
            UserRegistered::class,
        ];
    }

    public function process(object $event)
    {
        if ($event instanceof BeforeRegistered){
            echo get_class($event).$event->shouldRegister.PHP_EOL;
        } elseif($event instanceof UserRegistered) {
            echo get_class($event).$event->userId.PHP_EOL;
        }
    }
}
