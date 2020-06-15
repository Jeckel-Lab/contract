<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

namespace JeckelLab\Contract\Domain\Identity;

use JeckelLab\Contract\Domain\Equality;

/**
 * Interface Identity
 * @package JeckelLab\Contract\Domain\Identity
 * @psalm-immutable
 * @template T
 */
interface Identity extends Equality
{
    /**
     * IdAbstract constructor.
     * @param T|null $id
     */
    public function __construct($id);

    /**
     * @return string
     */
    public function toScalar(): string;

    /**
     * @return string
     */
    public function __toString(): string;
}
