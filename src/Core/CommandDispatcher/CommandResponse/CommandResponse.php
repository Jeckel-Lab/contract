<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\CommandDispatcher\CommandResponse;

use JeckelLab\Contract\Domain\Event\Event;

/**
 * Interface CommandResponse
 * @package JeckelLab\Contract\Core\CommandDispatcher\CommandResponse
 * @psalm-immutable
 */
interface CommandResponse
{
    /**
     * @return bool
     */
    public function isAck(): bool;

    /**
     * @return bool
     */
    public function isNack(): bool;

    /**
     * @return null|iterable<Event>
     */
    public function getEvents(): ?iterable;
}
