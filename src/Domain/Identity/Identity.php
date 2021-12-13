<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

namespace JeckelLab\Contract\Domain\Identity;

use JeckelLab\Contract\Domain\Equality;
use JeckelLab\Contract\Domain\Identity\Exception\InvalidIdException;
use JsonSerializable;
use Stringable;

/**
 * Interface Identity
 * @package JeckelLab\Contract\Domain\Identity
 * @psalm-immutable
 * @template IdentityType of int|string
 */
interface Identity extends Equality, Stringable, JsonSerializable
{
    /**
     * @return static
     */
    public static function new(): static;

    /**
     * @param int|string $identity
     * @return static
     * @throws InvalidIdException
     */
    public static function from(int|string $identity): static;

    /**
     * @psalm-return IdentityType
     */
    public function id();
}
