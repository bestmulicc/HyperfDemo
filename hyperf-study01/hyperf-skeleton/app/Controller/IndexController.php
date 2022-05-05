<?php

declare(strict_types=1);

namespace App\Controller;

use  App\Middleware\FooMiddleware;
use  App\Middleware\MidMiddleware;
use  App\Middleware\BazMiddleware;
use  Hyperf\HttpServer\Annotation\Middleware;
use  Hyperf\HttpServer\Annotation\Middlewares;
use  Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController()
 * @Middlewares(
 *     @Middleware(FooMiddleware::class),
 *     @Middleware(MidMiddleware::class),
 *     @Middleware(BazMiddleware::class)
 * )
 */
class IndexController
{
    public function index()
    {
        return 'index';
    }
}
