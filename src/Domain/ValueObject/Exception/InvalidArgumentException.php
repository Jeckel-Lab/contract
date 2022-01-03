<?php

/**
 * @author Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at : 20/11/2019
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Domain\ValueObject\Exception;

use InvalidArgumentException as InvalidArgumentExceptionCore;

/**
 * Class InvalidArgumentException
 * @package ValueObject\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class InvalidArgumentException extends InvalidArgumentExceptionCore implements ValueObjectException
{
}
