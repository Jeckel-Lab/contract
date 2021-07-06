<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 30/05/2020
 */

namespace JeckelLab\Contract\Domain;

/**
 * Interface Equality
 * @package JeckelLab\Contract\Domain
 */
interface Equality
{
    /**
     * @param mixed $object
     * @return bool
     * @psalm-mutation-free
     */
    public function equals(mixed $object): bool;
}
