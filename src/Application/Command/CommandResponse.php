<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Application\Command;

use JeckelLab\Contract\Application\Event\ApplicationEvent;

/**
 * Interface CommandResponseInterface
 * @package JeckelLab\Contract\Application\Command
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
     * @return ApplicationEvent[]
     */
    public function events(): array;
}
