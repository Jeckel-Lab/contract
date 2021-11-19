<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 19/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Application\Domain\Identity\Exception;

use LogicException;

/**
 * Class EnableToGenerateNewIdentityException
 * @package JeckelLab\Contract\Application\Domain\Identity\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class EnableToGenerateNewIdentityException extends LogicException implements IdentityException
{

}
