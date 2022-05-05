<?php

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use http\Exception\RuntimeException;
use App\Exception\FooException;
use function PHPUnit\Framework\throwException;

/**
 * @AutoController()
 */
class TestController
{
    public function co()
    {
        co(function (){
            while (true){
                echo 1;
                sleep(1);
            }
        });
        return 1;
    }
    public function exception()
    {
        throw new FooException('FooException...',800);
    }
//    public function whoops()
//    {
//        throw new RuntimeException("Whoos,this is a mistake");
//        $user = $this -> request -> input('user','Hyperf');
//        $method = $this -> request -> getMethod();
//        return [
//            'method' => $method,
//            'message' => "hello {$user}",
//        ];
//    }
}