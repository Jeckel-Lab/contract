<?php

/**
 * @author Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at : 20/11/2019
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Domain\ValueObject\Exception;

use JeckelLab\Contract\Domain\Exception\InvalidArgumentException as DomainInvalidArgumentException;

/**
 * Class InvalidArgumentException
 * @package ValueObject\Exception
 */
class InvalidArgumentException extends DomainInvalidArgumentException implements ValueObjectException
{

}
