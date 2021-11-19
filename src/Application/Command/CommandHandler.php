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
 * @template T of Command
 */
interface CommandHandler
{
    /**
     * @param T $command
     * @return CommandResponse
     */
    public function handle(Command $command): CommandResponse;
}
