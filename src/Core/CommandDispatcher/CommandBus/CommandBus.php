<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 03/12/2021
 */

namespace JeckelLab\Contract\Core\CommandDispatcher\CommandBus;

use JeckelLab\Contract\Core\CommandDispatcher\Command\Command;
use JeckelLab\Contract\Core\CommandDispatcher\CommandResponse\CommandResponse;
use JeckelLab\Contract\Core\CommandDispatcher\Exception\NoHandlerDefinedForCommandException;

/**
 * Interface CommandBus
 * @package JeckelLab\Contract\Core\CommandDispatcher\CommandBus
 */
interface CommandBus
{
    /**
     * @param Command $command
     * @return CommandResponse
     * @throws NoHandlerDefinedForCommandException
     */
    public function dispatch(Command $command): CommandResponse;
}
