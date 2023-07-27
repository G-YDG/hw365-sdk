# hw365-sdk

[海威特权开放平台](https://ot.jfshou.cn/)

Install the latest version with

```bash
$ composer require ydg/hw365-sdk
```

```php
<?php

use Ydg\Hw365Sdk\Hw365;

$app = new Hw365([
    'share_code' => 'your share_code',
    'secret_key' => 'your secret_key',
]);
$app->kfc->entrance([
    'user_id' => 1,
]);
```