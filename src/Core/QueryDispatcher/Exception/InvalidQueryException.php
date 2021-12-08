<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 08/12/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\QueryDispatcher\Exception;

use JeckelLab\Contract\Core\Exception\RuntimeException;

/**
 * Class InvalidQueryException
 * @package JeckelLab\Contract\Core\QueryDispatcher\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class InvalidQueryException extends RuntimeException implements QueryDispatcherException
{

}
