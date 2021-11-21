<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 19/11/2021
 */

namespace JeckelLab\Contract\Application\Domain\Identity;

use Stringable;

/**
 * Interface Identity
 * @package JeckelLab\Contract\Application\Domain\Identity
 * @template IdentityType
 * @psalm-immutable
 * @method private __construct($id)
 */
interface Identity extends Stringable
{
    /**
     * @return Identity<IdentityType>
     */
    public static function new();

    /**
     * @template T
     * @param T $id
     * @return Identity<T>
     */
    public static function from($id);

    /**
     * @param Identity<IdentityType> $other
     * @return bool
     */
    public function equalsTo($other): bool;

    /**
     * @return IdentityType
     */
    public function id();
}
