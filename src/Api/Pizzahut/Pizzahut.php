<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Pizzahut;

use Ydg\Hw365Sdk\Hw365Api;

class Pizzahut extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/privilege-api/pizzaHut/auth/index', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/privilege-api/pizzaHut/external/queryOrder', $params);
    }
}