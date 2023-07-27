<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Ticket;

use Ydg\Hw365Sdk\Hw365Api;

class Ticket extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/ticket/auth/index', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/ticket/query/order/list', $params);
    }
}