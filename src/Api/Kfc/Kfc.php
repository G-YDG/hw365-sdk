<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk\Api\Kfc;

use Ydg\Hw365Sdk\Hw365Api;

class Kfc extends Hw365Api
{
    public function entrance(array $params = []): string
    {
        return $this->buildRequestUrl('/api/entrance', $params);
    }

    public function queryOrder(array $params = []): array
    {
        return $this->request('/api/queryOrder', $params);
    }
}