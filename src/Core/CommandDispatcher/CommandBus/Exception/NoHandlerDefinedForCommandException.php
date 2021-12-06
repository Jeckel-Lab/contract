<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 03/12/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\CommandDispatcher\CommandBus\Exception;

use JeckelLab\Contract\Core\CommandDispatcher\Command\Command;
use JeckelLab\Contract\Core\Exception\LogicException;

/**
 * Class NoHandlerDefinedForCommandException
 * @package JeckelLab\Contract\Core\CommandDispatcher\CommandBus\Exception
 * @psalm-immutable
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
