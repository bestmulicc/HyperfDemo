<?php

namespace App\Service;

use App\Event\BeforeRegistered;
use App\Event\UserRegistered;
use Hyperf\Di\Annotation\Inject;

class UserService
{
    /**
     * @Inject()
     * @var \Psr\EventDispatcher\EventDispatcherInterface
     */
    private $eventDispatcher;
    public function register()
    {
        $beforeRegister = new BeforeRegistered();
        $this->eventDispatcher->dispatch($beforeRegister);
        //register admin
        if ($beforeRegister->shouldRegister) {
            $userId = rand(0, 9999);
            if ($userId) {
                $this->eventDispatcher->dispatch(new UserRegistered($userId));
            }
            return $userId;
        }
        return 'false';
    }
}