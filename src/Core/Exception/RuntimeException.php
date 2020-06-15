<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\Exception;

/**
 * Class RuntimeException
 * @package JeckelLab\Contract\Core\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class RuntimeException extends \RuntimeException implements CoreException
{

}
