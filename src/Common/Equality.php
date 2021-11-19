<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 19/11/2021
 */

namespace JeckelLab\Contract\Common;

/**
 * Interface Equality
 * @package JeckelLab\Contract\Common
 */
interface Equality
{
    /**
     * @param self $other
     * @return bool
     */
    public function equalsTo(self $other): bool;
}
