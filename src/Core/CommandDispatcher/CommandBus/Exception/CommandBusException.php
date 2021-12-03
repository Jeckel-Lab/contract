<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 03/12/2021
 */

namespace JeckelLab\Contract\Core\CommandDispatcher\CommandBus\Exception;

use JeckelLab\Contract\Core\CommandDispatcher\Exception\CommandDispatcherException;

/**
 * Interface CommandBusException
 * @package JeckelLab\Contract\Core\CommandDispatcher\CommandBus\Exception
 * @psalm-immutable
 */
interface CommandBusException extends CommandDispatcherException
{

}
