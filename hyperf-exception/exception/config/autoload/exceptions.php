<?php

declare(strict_types=1);

use App\Exception\Handler\FooExceptionHandler;
use Hyperf\ExceptionHandler\Handler\WhoopsExceptionHandler;
return [
    'handler' => [
        'http' => [
            FooExceptionHandler::class,
            WhoopsExceptionHandler::class,
            Hyperf\HttpServer\Exception\Handler\HttpExceptionHandler::class,
            App\Exception\Handler\AppExceptionHandler::class,
        ],
    ],
];
