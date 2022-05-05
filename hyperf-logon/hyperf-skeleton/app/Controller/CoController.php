<?php

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Utils\Context;
use Swoole\Coroutine\Channel;

/**
 * @AutoController
 *
 */
class CoController
{
//    private $foo = 1;
//
//    public function get()
//    {
//        return $this->foo;
//    }
//
//    public function index(RequestInterface $request)
//    {
//        $foo = $request->input('foo');
//        $this->foo = $foo;
//        return $this->foo;
//    }
//    public function get()
//    {
//        return Context::get('foo','null');
//    }
//
//    public function index(RequestInterface $request)
//    {
//        $foo = $request->input('foo');
//        Context::set('foo',$foo);
//        return Context::get('foo');
//    }
    /**
     * @Inject()
     * @var \Hyperf\Guzzle\ClientFactory
     */
    private $clientFactory;

    public function sleep(RequestInterface $request)
    {
        $seconds = $request->query('seconds',1);
        sleep($seconds);
        return $seconds;
    }
    public function text()
    {
        $channel = new Channel();
        co(function () use ($channel) {
           $client = $this->clientFactory->create();
           $client -> get('127.0.0.1:9501/co/sleep?seconds=2');
           $channel ->push(123);
        });
        co(function () use ($channel) {
            $client = $this->clientFactory->create();
            $client -> get('127.0.0.1:9501/co/sleep?seconds=2');
            $channel ->push(321);
        });
        $result[] = $channel->pop();
        $result[] = $channel->pop();
        return $result;
    }
}