<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\CommandDispatcher\CommandHandler;

use JeckelLab\Contract\Core\CommandDispatcher\Command\Command;
use JeckelLab\Contract\Core\CommandDispatcher\CommandResponse\CommandResponse;

/**
 * Interface CommandHandler
 * @package JeckelLab\Contract\Core\CommandDispatcher\CommandHandler
 */
interface CommandHandler
{
    /**
     * @return array<class-string<Command>>
     */
    public static function getHandledCommands(): array;

    /**
     * @param Command $command
     * @return CommandResponse
     */
    public function __invoke(Command $command): CommandResponse;
}
