<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Luckin;

use Ydg\Hw365Sdk\Hw365Api;

class Luckin extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/privilege-api/luckin/auth/index', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/privilege-api/luckin/external/queryOrder', $params);
    }
}