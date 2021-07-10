<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 23/07/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\Async\Consumer;

use JeckelLab\Contract\Core\Async\Message\CommandMessage;
use JeckelLab\Contract\Core\Async\Message\IncomingCommandMessage;

/**
 * Interface CommandConsumer
 * @package JeckelLab\Contract\Core\Async\Consumer
 */
interface CommandConsumer
{
    /**
     * @return IncomingCommandMessage|null
     */
    public function getMessage(): ?IncomingCommandMessage;

    /**
     * @param CommandMessage $commandMessage
     */
    public function ack(CommandMessage $commandMessage): void;

    /**
     * @param CommandMessage $commandMessage
     * @param bool           $requeue
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
     */
    public function nack(CommandMessage $commandMessage, bool $requeue = true): void;
}
