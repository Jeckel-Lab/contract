<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\CommandDispatcher\Exception;

use JeckelLab\Contract\Core\Exception\RuntimeException;

/**
 * Class InvalidCommandException
 * @package JeckelLab\Contract\Core\CommandDispatcher\Exception
 * @psalm-immutable
 */
class InvalidCommandException extends RuntimeException implements CommandDispatcherException
{

}
