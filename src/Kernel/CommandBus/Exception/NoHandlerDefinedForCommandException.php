<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Kernel\CommandBus\Exception;

use JeckelLab\Contract\Application\Command\Command;
use LogicException;

/**
 * Class NoHandlerDefinedForCommandException
 * @package JeckelLab\Contract\Kernel\CommandBus\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class NoHandlerDefinedForCommandException extends LogicException implements CommandBusException
{
    /**
     * @param Command $command
     */
    public function __construct(Command $command)
    {
        parent::__construct(sprintf('No command handler found for command %s', get_class($command)));
    }
}
