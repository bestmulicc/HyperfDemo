<?php
declare(strict_types=1);

namespace App\Controller;

use Hyperf\Di\Annotation\AnnotationCollector;
use Hyperf\HttpServer\Annotation\AutoController;
/**
 * @AutoController(path="aop")
 */
class AopController
{
    public function index()
    {
        return 1;
    }
}