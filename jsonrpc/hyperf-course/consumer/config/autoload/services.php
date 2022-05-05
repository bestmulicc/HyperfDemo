<?php

use App\RPC\CalculatorServiceInterface;

return [
    'consumers' => [
        [
            'name' => 'CalculatorService',
            'service' => CalculatorServiceInterface::class,
            'registry' => [
                'protocol' => 'consul',
                'address' => 'http://127.0.0.1:8500',
            ],
            'nodes' => [
                ['host' => '127.0.0.1','port' => 9502]
            ]
        ]
    ],
];