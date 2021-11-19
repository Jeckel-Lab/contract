<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Kernel\QueryBus\Exception;

use JeckelLab\Contract\Kernel\Exception\KernelMainException;

/**
 * Interface QueryBusExceptionInterface
 * @package JeckelLab\Contract\Kernel\QueryBus\Exception
 * @psalm-immutable
 */
interface QueryBusException extends KernelMainException
{

}
