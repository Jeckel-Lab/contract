<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 03/12/2021
 */

namespace JeckelLab\Contract\Core\CommandDispatcher\CommandHandler;

use JeckelLab\Contract\Core\CommandDispatcher\Command\Command;
use JeckelLab\Contract\Core\CommandDispatcher\CommandResponse\CommandResponse;
use JeckelLab\Contract\Core\CommandDispatcher\Exception\InvalidCommandTypeException;

/**
 * Interface CommandHandler
 * @package JeckelLab\Contract\Core\CommandDispatcher\CommandHandler
 * @template CommandType of Command
 */
interface CommandHandler
{
    /**
     * @return list<class-string<Command>>
     * @psalm-mutation-free
     */
    public static function getHandledCommands(): array;

    /**
     * @param CommandType $command
     * @return CommandResponse
     * @throws InvalidCommandTypeException
     */
    public function __invoke(Command $command): CommandResponse;
}
