<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Express;

use Ydg\Hw365Sdk\Hw365Api;

class Express extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/privilege-api/express/delivery/auth/index', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/privilege-api/expressDelivery/external/queryOrder', $params);
    }
}