<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 08/12/2021
 */

namespace JeckelLab\Contract\Core\QueryDispatcher\QueryBus\Exception;

use JeckelLab\Contract\Core\QueryDispatcher\Exception\QueryDispatcherException;

/**
 * Class QueryBusException
 * @package JeckelLab\Contract\Core\QueryDispatcher\QueryBus\Exception
 * @psalm-immutable
 */
interface QueryBusException extends QueryDispatcherException
{
}
