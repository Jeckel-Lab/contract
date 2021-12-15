<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 14/12/2021
 */

namespace Tests\JeckelLab\Contract\Domain\Entity;

use JeckelLab\Contract\Domain\Entity\DomainEventAwareInterface;
use JeckelLab\Contract\Domain\Entity\DomainEventAwareTrait;
use JeckelLab\Contract\Domain\Entity\Entity;
use JeckelLab\Contract\Domain\Identity\Identity;

/**
 * Class FakeDomainEventAwareEntity
 * @package Tests\JeckelLab\Contract\Domain\Entity
 * @implements Entity<DummyIdentity>
 */
final class FakeDomainEventAwareEntity implements DomainEventAwareInterface, Entity
{
    public function getId(): Identity
    {
        throw new \LogicException('Should not be called');
    }

    use DomainEventAwareTrait;
}
