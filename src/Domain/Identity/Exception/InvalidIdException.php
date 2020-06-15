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
 * @package JeckelLab\Contract\Domain\Identity\Exception
 * @psalm-immutable
 */
class InvalidIdException extends InvalidArgumentException implements IdentityException
{

}
