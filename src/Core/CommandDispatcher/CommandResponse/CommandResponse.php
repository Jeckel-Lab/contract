<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 03/12/2021
 */

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
    public function isSuccess(): bool;

    /**
     * @return bool
     */
    public function isFailure(): bool;

    /**
     * @return string|null
     */
    public function failureReason(): ?string;

    /**
     * @return null|iterable<Event>
     */
    public function events(): ?iterable;
}
