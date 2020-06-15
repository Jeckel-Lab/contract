<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Infrastructure\System;

use DateTimeImmutable;

/**
 * Interface Clock
 * @package JeckelLab\Contract\Infrastructure\System
 */
interface Clock
{
    /**
     * @return DateTimeImmutable
     */
    public function now(): DateTimeImmutable;
}
