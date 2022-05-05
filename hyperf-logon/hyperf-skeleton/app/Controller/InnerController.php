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
namespace App\Controller;

use Hyperf\DbConnection\Db;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Annotation\AutoController;
use function Hyperf\ViewEngine\view;
use Hyperf\View\RenderInterface;

/**
 * @AutoController(server="innerHttp")
 */

class InnerController
{
    public function usermsg(RequestInterface $request)
    {
        $usermsg = Db::select('SELECT * FROM user_msg');
        return view('mesg',['usermsg' => $usermsg]);
    }
    public function index()
    {
        return view('logon');
    }
    public function logon(RequestInterface $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $resultName = Db::table('user_msg')->select('username')->where('username',$username)->exists() &&
            Db::table('user_msg')->select('username')->where('password',$password)->exists() ;
        if($resultName != null)
        {
            return view('result',['result'=>"success!"]);
        } else return view('result',['result'=>"fail!please try again!"]);
    }
    public function registerIndex()
    {
        return view('register');
    }
    public function register(RequestInterface $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $resultName = Db::table('user_msg')->select('username')->where('username',$username)->exists();
        if ($resultName != null)
        {
            return view('result',['result'=>"FAIL!the user is already"]);
        } elseif($password != null) {
            Db::table('user_msg')->insert(
                ['username' => $username, 'password' => $password]);
            return view('result',['result'=>"SUCCESS!the user is ready"]);
        } else return view('result',['result'=>"FAIL!the password can`t  null"]);
    }
}
