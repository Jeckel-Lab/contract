<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Kernel\CommandBus\Exception;

use LogicException;

/**
 * Class NoHandlerDefinedForCommandException
 * @package JeckelLab\Contract\Kernel\CommandBus\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class NoHandlerDefinedForCommandException extends LogicException implements CommandBusExceptionInterface
{

}
