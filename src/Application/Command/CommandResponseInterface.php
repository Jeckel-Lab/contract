<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Application\Command;

use JeckelLab\Contract\Application\Event\ApplicationEventInterface;

/**
 * Interface CommandResponseInterface
 * @package JeckelLab\Contract\Application\Command
 * @psalm-immutable
 */
interface CommandResponseInterface
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
    public function getFailureReason(): ?string;

    /**
     * @return ApplicationEventInterface[]
     */
    public function events(): array;
}
