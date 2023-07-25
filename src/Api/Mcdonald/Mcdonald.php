<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Mcdonald;

use Ydg\Hw365Sdk\Hw365Api;

class Mcdonald extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/api/mcdonald/entrance', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/api/queryMcOrder', $params);
    }
}