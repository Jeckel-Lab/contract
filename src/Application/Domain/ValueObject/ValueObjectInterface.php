<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Application\Domain\ValueObject;

use Stringable;

/**
 * Interface ValueObjectInterface
 * @package JeckelLab\Contract\Application\Domain\ValueObject
 * @template T of int|string
 */
interface ValueObjectInterface extends Stringable
{
    /**
     * @return T
     */
    public function scalar();
}
