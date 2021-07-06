<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

namespace JeckelLab\Contract\Domain\Identity;

use JeckelLab\Contract\Domain\Equality;
use JeckelLab\Contract\Domain\Identity\Exception\InvalidIdException;
use Stringable;

/**
 * Interface Identity
 * @package JeckelLab\Contract\Domain\Identity
 * @psalm-immutable
 * @template T
 */
interface Identity extends Equality, Stringable
{
    /**
     * IdAbstract constructor.
     * @param T $id
     * @throws InvalidIdException
     */
    public function __construct($id);
}
