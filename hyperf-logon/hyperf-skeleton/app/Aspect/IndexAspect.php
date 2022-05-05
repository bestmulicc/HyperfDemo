<?php

namespace App\Aspect;

use App\Controller\AopController;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;
use Hyperf\Di\Annotation\Aspect;

/**
 * @Aspect
 */
class IndexAspect extends AbstractAspect
{
    public $classes = [
        AopController::class . '::' . 'index',
    ];

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        // TODO: Implement process() method.
        echo '1111111';
        $result = $proceedingJoinPoint->process();
        return $result;
    }
}