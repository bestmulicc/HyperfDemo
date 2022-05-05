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

use App\Model\HyperfTest1;
use Hyperf\DbConnection\Db;
class IndexController extends AbstractController
{
    public function index()
    {
//        $id = HyperfTest1::pluck('id');
//        $name = Db::table('hyperf_test1')->pluck('name');
//        var_dump($name);
//        var_dump($id);
//        $row = HyperfTest1::where('id',2)->first(); // sql 会自动加上 limit 1
//        echo $row;
        $id = HyperfTest1::where('id',90)->doesntExist();
        var_dump($id);
    }
}
