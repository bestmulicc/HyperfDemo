<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\Di\Annotation\Inject;

class IndexController
{
    /**
     * @Inject()
     * @var \App\Rpc\CalculatorServiceInterface
     */
    private $calculatorService;

    public function index()
    {
        return $this -> calculatorService ->add(3,2);
    }
}
