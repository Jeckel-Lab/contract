<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 23/07/2020
 */

namespace JeckelLab\Contract\Core\Async\Message;

/**
 * Interface IncomingCommandMessage
 * @package JeckelLab\Contract\Core\Async\Message
 * @psalm-immutable
 */
interface IncomingCommandMessage
{
    /**
     * @return string
     */
    public function getCommand(): string;

    /**
     * @return array|null
     */
    public function getArguments(): ?array;
}
