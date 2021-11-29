<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Application\Command;

/**
 * Interface CommandHandlerInterface
 * @package JeckelLab\Contract\Application\Command
 * @template CommandType of Command
 */
interface CommandHandler
{
    /**
     * @return list<class-string<Command>>
     */
    public static function accept(): array;

    /**
     * @param CommandType $command
     * @return CommandResponse
     */
    public function handle(Command $command): CommandResponse;
}
