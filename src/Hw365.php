<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk;

use Ydg\FoudationSdk\ServiceContainer;

/**
 * @property Api\Kfc\Kfc $kfc
 * @property Api\Mcdonald\Mcdonald $mcdonald
 * @property Api\Wallace\Wallace $wallace
 * @property Api\Luckin\Luckin $luckin
 * @property Api\Sbkplus\Sbkplus $sbkplus
 * @property Api\Nayuki\Nayuki $nayuki
 * @property Api\Heytea\Heytea $heytea
 * @property Api\Ticket\Ticket $ticket
 */
class Hw365 extends ServiceContainer
{
    protected $providers = [
        Api\Kfc\ServiceProvider::class,
        Api\Mcdonald\ServiceProvider::class,
        Api\Wallace\ServiceProvider::class,
        Api\Luckin\ServiceProvider::class,
        Api\Sbkplus\ServiceProvider::class,
        Api\Nayuki\ServiceProvider::class,
        Api\Heytea\ServiceProvider::class,
        Api\Ticket\ServiceProvider::class,
    ];
}