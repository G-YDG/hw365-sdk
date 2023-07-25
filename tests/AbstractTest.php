<?php

declare(strict_types=1);

namespace YdgTest;

use PHPUnit\Framework\TestCase;

abstract class AbstractTest extends TestCase
{
    public function getConfig(): array
    {
        return [
            'share_code' => 'your share_code',
            'secret_key' => 'your secret_key',
        ];
    }

    public function isSuccessResponse($response)
    {
        $this->assertArrayHasKey('error_code', $response);
        $this->assertEquals(200, $response['error_code']);
    }
}
