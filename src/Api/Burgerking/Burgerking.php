<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Burgerking;

use Ydg\Hw365Sdk\Hw365Api;

class Burgerking extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/privilege-api/burgerKing/auth/index', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/privilege-api/burgerKing/external/queryOrder', $params);
    }
}