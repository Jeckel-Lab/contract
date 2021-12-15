<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Domain\Identity\Exception;

use JeckelLab\Contract\Domain\Exception\InvalidArgumentException;

/**
 * Class InvalidIdException
 *
 * The value used to instantiate an Identity Instance doesn't match the expected format
 *
 * @package JeckelLab\Contract\Domain\Identity\Exception
 * @psalm-immutable
 */
class InvalidIdException extends InvalidArgumentException implements IdentityException
{
    /**
     * @param int|string $id
     */
    public function __construct(int|string $id)
    {
        parent::__construct(sprintf('Invalid id "%s" provided', $id));
    }
}
