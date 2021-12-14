<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Domain\Exception;

/**
 * Class LogicException
 * @package JeckelLab\Contract\Domain\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class LogicException extends \LogicException implements DomainException
{
}
