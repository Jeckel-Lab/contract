<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/12/2021
 */

declare(strict_types=1);

namespace Tests\JeckelLab\Contract\Domain\Entity;

use JeckelLab\Contract\Domain\Identity\Exception\InvalidIdException;
use JeckelLab\Contract\Domain\Identity\Identity;

/**
 * Class DummyIdentity
 * @package Tests\JeckelLab\Contract\Domain\Entity
 * @implements Identity<int>
 * @psalm-immutable
 */
abstract class DummyIdentity implements Identity
{
}
