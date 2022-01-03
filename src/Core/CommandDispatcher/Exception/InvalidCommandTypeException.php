<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 03/12/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\CommandDispatcher\Exception;

use LogicException;

/**
 * Class InvalidCommandException
 * @package JeckelLab\Contract\Core\CommandDispatcher\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class InvalidCommandTypeException extends LogicException implements CommandDispatcherException
{
}
