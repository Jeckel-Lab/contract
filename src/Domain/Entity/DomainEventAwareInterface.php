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
     * @param Event ...$events
     * @return static
     */
    public function addDomainEvent(Event ...$events): static;

    /**
     * @return list<Event>
     */
    public function popEvents(): array;
}
