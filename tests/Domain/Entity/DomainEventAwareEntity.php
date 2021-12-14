<?php

namespace Tests\JeckelLab\Contract\Domain\Entity;

use JeckelLab\Contract\Domain\Entity\DomainEventAwareInterface;
use JeckelLab\Contract\Domain\Entity\DomainEventAwareTrait;
use JeckelLab\Contract\Domain\Entity\Entity;
use JeckelLab\Contract\Domain\Event\Event;

class DomainEventAwareEntity implements DomainEventAwareInterface, Entity
{
    use DomainEventAwareTrait;
}
