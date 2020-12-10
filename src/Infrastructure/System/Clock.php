<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

namespace JeckelLab\Contract\Infrastructure\System;

use DateTimeImmutable;
use DateTimeZone;

/**
 * Interface Clock
 * @package JeckelLab\Contract\Infrastructure\System
 */
interface Clock
{
    /**
     * @param DateTimeZone|null $timezone
     * @return DateTimeImmutable
     */
    public function now(?DateTimeZone $timezone = null): DateTimeImmutable;
}
