<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 23/07/2020
 */

namespace JeckelLab\Contract\Core\Async\Message;

use JeckelLab\Contract\Core\CommandDispatcher\Command\Command;

/**
 * Interface CommandMessage
 * @package JeckelLab\Contract\Core\Async\Message
 * @psalm-immutable
 */
interface CommandMessage
{
    /**
     * @return IncomingCommandMessage
     */
    public function getIncomingMessage(): IncomingCommandMessage;

    /**
     * @return Command
     */
    public function getCommand(): Command;
}
