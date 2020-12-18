<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

namespace JeckelLab\Contract\Domain\ValueObject;

/**
 * Interface ValueObject
 * @psalm-immutable
 */
interface ValueObject
{
    /**
     * @return string
     */
    public function __toString(): string;
}
