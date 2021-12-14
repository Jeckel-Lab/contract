<?php

/**
 * @author Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at : 20/11/2019
 */

namespace JeckelLab\Contract\Domain\ValueObject\Exception;

use JeckelLab\Contract\Domain\Exception\DomainException;

/**
 * Interface ValueObjectExceptionInterface
 * @package ValueObject\Exception
 * @psalm-immutable
 */
interface ValueObjectException extends DomainException
{
}
