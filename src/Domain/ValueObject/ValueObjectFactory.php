<?php

namespace JeckelLab\Contract\Domain\ValueObject;

use JeckelLab\Contract\Domain\ValueObject\Exception\InvalidArgumentException;

/**
 * @psalm-immutable
 */
interface ValueObjectFactory
{
    /**
     * @param mixed $value
     * @return static
     * @throws InvalidArgumentException
     */
    public static function from(mixed $value): static;
}
