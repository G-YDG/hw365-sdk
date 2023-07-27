<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Heytea;

use Ydg\Hw365Sdk\Hw365Api;

class Heytea extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/privilege-api/heytea/auth/index', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/privilege-api/heytea/external/queryOrder', $params);
    }

    public function queryTakeoutOrder(array $params = []): array
    {
        return $this->request('/privilege-api/heyteaTakeout/external/queryOrder', $params);
    }
}