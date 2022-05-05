<?php

namespace App\Controller;

use App\Annotation\Foo;
use Hyperf\Di\Annotation\AnnotationCollector;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController
 *
 */
class AnnoController
{
    public function index()
    {
//        var_dump(AnnotationCollector::getClassesByAnnotation(Foo::class));
        return 1;
    }
}