<?php

namespace App\Rpc;

use Hyperf\RpcServer\Annotation\RpcService;
/**
 * @RpcService(name="CalculatorService",protocol="jsonrpc-http",server="jsonrpc-http",publishTo="consul")
 */
class CalculatorService implements CalculatorServiceInterface
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function minus(int $a, int $b): int
    {
        return $a - $b;
    }
}