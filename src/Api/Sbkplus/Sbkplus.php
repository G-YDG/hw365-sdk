<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Sbkplus;

use Ydg\Hw365Sdk\Hw365Api;

class Sbkplus extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/sbkplus/auth/index', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/sbkplus/queryStarbucksOrder', $params);
    }
}