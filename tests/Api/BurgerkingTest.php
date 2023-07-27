<?php

declare(strict_types=1);

namespace YdgTest\Api;

use Ydg\Hw365Sdk\Hw365;
use YdgTest\AbstractTest;

/**
 * @internal
 * @coversNothing
 */
class BurgerkingTest extends AbstractTest
{
    public function testEntrance()
    {
        $app = new Hw365([
            'share_code' => '123456',
            'secret_key' => '123456',
        ]);
        $url = $app->burgerking->entrance([
            'timestamp' => 1690363148506,
            'user_id' => 1,
            'extra' => 't_1',
        ]);
        $cUrl = 'https://ot.jfshou.cn/privilege-api/burgerKing/auth/index?timestamp=1690363148506&user_id=1&extra=t_1&share_code=123456&sign=101381E240CD6778DD7328A6EDBAFA0E';
        $this->assertEquals($cUrl, $url);
    }

    public function testQueryOrder()
    {
        $app = new Hw365($this->getConfig());
        $response = $app->burgerking->queryOrder([
            'start_time' => date('Y-m-d H:i:s', time() - 600),
            'end_time' => date('Y-m-d H:i:s', time()),
            'page_number' => 1,
            'page_size' => 10,
            'time_type' => 0,
        ]);
        $this->assertArrayHasKey('errorCode', $response);
        $this->assertEquals(200, $response['errorCode']);
    }
}
