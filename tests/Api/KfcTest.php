<?php

declare(strict_types=1);

namespace YdgTest\Api;

use Ydg\Hw365Sdk\Hw365;
use YdgTest\AbstractTest;

/**
 * @internal
 * @coversNothing
 */
class KfcTest extends AbstractTest
{
    public function testEntrance()
    {
        $app = new Hw365([
            'share_code' => '123456',
            'secret_key' => '123456',
        ]);
        $url = $app->kfc->entrance([
            'timestamp' => 1690267626311,
            'user_id' => 1,
            'extra' => 't_1',
        ]);
        $cUrl = 'https://ot.jfshou.cn/api/entrance?timestamp=1690267626311&user_id=1&extra=t_1&share_code=123456&sign=08DA4F3B376FCE12FDF54388627D7A1C';
        $this->assertEquals($cUrl, $url);
    }

    public function testQueryOrder()
    {
        $app = new Hw365($this->getConfig());
        $response = $app->kfc->queryOrder([
            'start_time' => date('Y-m-d H:i:s', time() - 600),
            'end_time' => date('Y-m-d H:i:s', time()),
            'page_number' => 1,
            'page_size' => 10,
            'time_type' => 0,
        ]);
        $this->isSuccessResponse($response);
    }
}
