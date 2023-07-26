<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Wallace;

use Ydg\Hw365Sdk\Hw365Api;

class Wallace extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/privilege-api/wallace/auth/index', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/privilege-api/wallace/external/queryOrder', $params);
    }
}