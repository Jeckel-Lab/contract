<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

namespace JeckelLab\Contract\Domain\ValueObject;

use JeckelLab\Contract\Domain\Equality;
use JeckelLab\Contract\Domain\ValueObject\Exception\InvalidArgumentException;
use JsonSerializable;
use Stringable;

/**
 * Interface ValueObject
 * @psalm-immutable
 */
interface ValueObject extends Stringable, Equality, JsonSerializable
{
    /**
     * @param mixed $value
     * @return static
     * @throws InvalidArgumentException
     */
    public static function from(mixed $value): static;
}
