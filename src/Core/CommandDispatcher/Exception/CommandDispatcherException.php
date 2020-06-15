<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\CommandDispatcher\Exception;

use JeckelLab\Contract\Core\Exception\CoreException;

/**
 * Interface CommandDispatcherException
 * @package JeckelLab\Contract\Core\CommandDispatcher\Exception
 * @psalm-immutable
 */
interface CommandDispatcherException extends CoreException
{

}
