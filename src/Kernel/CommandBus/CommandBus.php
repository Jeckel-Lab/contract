<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Kernel\CommandBus;

use JeckelLab\Contract\Application\Command\Command;
use JeckelLab\Contract\Application\Command\CommandResponse;
use JeckelLab\Contract\Kernel\CommandBus\Exception\CommandBusException;

/**
 * Interface CommandBusInterface
 * @package JeckelLab\Contract\Kernel\CommandBus
 */
interface CommandBus
{
    /**
     * @param Command $command
     * @return CommandResponse
     * @throws CommandBusException
     */
    public function dispatch(Command $command): CommandResponse;
}
