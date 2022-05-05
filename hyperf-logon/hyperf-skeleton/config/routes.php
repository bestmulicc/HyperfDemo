<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return '';
});

//Router::addRoute(['GET', 'POST', 'HEAD'], '/aop/index', 'App\Controller\AopController@index');

Router::addRoute(['GET', 'POST', 'HEAD'], '/config/index', 'App\Controller\ConfigController@index');

Router::get('/co/text', 'App\Controller\CoController@text');