<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 14/12/2021
 */

namespace Tests\JeckelLab\Contract\Domain\Entity;

use JeckelLab\Contract\Domain\Event\Event;
use PHPUnit\Framework\TestCase;

/**
 * Class DomainEventAwareTraitTest
 * @package Tests\JeckelLab\Contract\Domain\Entity
 * @psalm-suppress PropertyNotSetInConstructor
 */
class DomainEventAwareTraitTest extends TestCase
{
    public function testWithoutEvents(): void
    {
        $entity = new FakeDomainEventAwareEntity();
        $this->assertEmpty($entity->popEvents());
    }

    public function testWithOneEvent(): void
    {
        $entity = new FakeDomainEventAwareEntity();
        $event = $this->createMock(Event::class);
        $this->assertSame($entity, $entity->addDomainEvent($event));
        $this->assertSame([$event], $entity->popEvents());
        // second call should return empty list
        $this->assertEmpty($entity->popEvents());
    }

    public function testWithMultipleEvents(): void
    {
        $entity = new FakeDomainEventAwareEntity();
        $event1 = $this->createMock(Event::class);
        $event2 = $this->createMock(Event::class);
        $event3 = $this->createMock(Event::class);
        $this->assertSame($entity, $entity->addDomainEvent($event1, $event2));
        $this->assertSame($entity, $entity->addDomainEvent($event3));
        $this->assertSame([$event1, $event2, $event3], $entity->popEvents());
        // second call should return empty list
        $this->assertEmpty($entity->popEvents());

    }
}
