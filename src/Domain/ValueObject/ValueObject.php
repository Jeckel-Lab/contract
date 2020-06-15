<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Domain\ValueObject;

/**
 * Interface ValueObject
 * @psalm-immutable
 * @template T
 */
interface ValueObject
{
    /**
     * @paslm-return T
     * @return T
     */
    public function toScalar();

    /**
     * @return string
     */
    public function __toString(): string;
}
