<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk;

use Ydg\FoudationSdk\ServiceContainer;

/**
 * @property Api\Kfc\Kfc $kfc
 * @property Api\Mcdonald\Mcdonald $mcdonald
 * @property Api\Wallace\Wallace $wallace
 * @property Api\Luckin\Luckin $luckin
 */
class Hw365 extends ServiceContainer
{
    protected $providers = [
        Api\Kfc\ServiceProvider::class,
        Api\Mcdonald\ServiceProvider::class,
        Api\Wallace\ServiceProvider::class,
        Api\Luckin\ServiceProvider::class,
    ];
}