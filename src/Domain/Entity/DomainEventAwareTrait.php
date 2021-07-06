<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 26/03/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Domain\Entity;

use JeckelLab\Contract\Domain\Event\Event;

/**
 * Trait DomainEventAwareEntityTrait
 * @package JeckelLab\Contract\Domain\Entity
 */
trait DomainEventAwareTrait
{
    /** @var Event[] */
    private array $events = [];

    /**
     * @return Event[]
     */
    public function popEvents(): array
    {
        $events = $this->events;
        $this->events = [];
        return $events;
    }

    /**
     * @param Event $event
     * @return void
     */
    public function addDomainEvent(Event $event): void
    {
        $this->events[] = $event;
    }
}
