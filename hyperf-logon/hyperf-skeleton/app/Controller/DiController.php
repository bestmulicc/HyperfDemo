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

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Annotation\AutoController;
use App\Service\UserService;

/**
 * @AutoController()
 */
class DiController
{
    /**
     * @var UserService
     */
    private $userService;

    // 在构造函数声明参数的类型，Hyperf 会自动注入对应的对象或值
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    // /index/info
    public function info(RequestInterface $request)
    {
        $id = $request->input('id', 1);
        return $this->userService->getInfoById((int)$id);
    }
}