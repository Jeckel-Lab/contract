<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/06/2020
 */

namespace JeckelLab\Contract\Domain\Entity;

use JeckelLab\Contract\Domain\Identity\Identity;

/**
 * Interface Entity
 * @package JeckelLab\Contract\Domain\Entity
 * @template IdentityType of Identity
 */
interface Entity
{
    /**
     * @return Identity
     * @psalm-return IdentityType
     */
    public function getId(): Identity;
}
