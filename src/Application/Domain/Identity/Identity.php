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
 */
interface Identity extends Stringable
{
    /**
     * @param IdentityType $id
     */
    public function __construct($id);

    /**
     * @template T
     * @param T|null $id
     * @return Identity<T>
     */
    public static function new($id = null);

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
