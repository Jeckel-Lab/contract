<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Kernel\CommandBus\Exception;

use JeckelLab\Contract\Kernel\Exception\KernelMainException;

/**
 * Interface CommandBusExceptionInterface
 * @package JeckelLab\Contract\Kernel\CommandBus\Exception
 * @psalm-immutable
 */
interface CommandBusException extends KernelMainException
{

}
