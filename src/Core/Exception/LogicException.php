<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 03/12/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\Exception;

/**
 * Class LogicException
 * @package JeckelLab\Contract\Core\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class LogicException extends \LogicException implements CoreMainException
{

}
