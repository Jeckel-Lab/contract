<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Kernel\CommandBus;

use JeckelLab\Contract\Application\Command\CommandInterface;
use JeckelLab\Contract\Application\Command\CommandResponseInterface;
use JeckelLab\Contract\Kernel\CommandBus\Exception\CommandBusExceptionInterface;

/**
 * Interface CommandBusInterface
 * @package JeckelLab\Contract\Kernel\CommandBus
 */
interface CommandBusInterface
{
    /**
     * @param CommandInterface $command
     * @return CommandResponseInterface
     * @throws CommandBusExceptionInterface
     */
    public function dispatch(CommandInterface $command): CommandResponseInterface;
}
