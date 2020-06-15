<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 30/05/2020
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Domain;

/**
 * Interface Equality
 * @package JeckelLab\Contract\Domain
 */
interface Equality
{
    /**
     * @param static $object
     * @return bool
     */
    public function equals($object): bool;
}
