<?php

namespace App\Event;

class UserRegistered
{
    /**
     * @var int
     */
    public $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }
}