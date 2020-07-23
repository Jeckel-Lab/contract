<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/06/2020
 */

namespace JeckelLab\Contract\Domain\Entity;

use JeckelLab\Contract\Domain\Event\Event;

/**
 * Interface DomainEventAwareInterface
 * @package JeckelLab\Contract\Domain\Entity
 */
interface DomainEventAwareInterface
{
    /**
     * @return Event[]
     */
    public function popEvents(): array;

    /**
     * @param Event $event
     * @return void
     */
    public function addDomainEvent(Event $event): void;
}
