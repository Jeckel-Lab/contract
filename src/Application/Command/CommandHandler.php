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
     * @param Command $command
     * @return bool
     */
    public static function accept(Command $command): bool;

    /**
     * @param CommandType $command
     * @return CommandResponse
     */
    public function handle(Command $command): CommandResponse;
}
