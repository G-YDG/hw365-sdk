<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Nayuki;

use Ydg\Hw365Sdk\Hw365Api;

class Nayuki extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/api/nayuki/entrance', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/api/nayuki/order/queryOrdersByUser', $params);
    }
}