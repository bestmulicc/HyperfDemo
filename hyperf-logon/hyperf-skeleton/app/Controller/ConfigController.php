<?php

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Di\Annotation\Inject;
/**
 * @AutoController
 */
class ConfigController
{
    /**
     * @Inject()
     * @var \Hyperf\Contract\ConfigInterface
     */
    private $config;

    public function index()
    {
        return $this->config->get('foo.bar',123);
    }

}