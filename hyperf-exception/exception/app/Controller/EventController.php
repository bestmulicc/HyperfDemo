<?php

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Di\Annotation\Inject;
/**
 * @AutoController()
 */
class EventController
{
    /**
     * @Inject ()
     * @var \App\Service\UserService
     */
    private $userService;

    public function test()
    {
        return $this->userService->register();
    }
}