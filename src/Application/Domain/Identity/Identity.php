<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 19/11/2021
 */

namespace JeckelLab\Contract\Application\Domain\Identity;

use JeckelLab\Contract\Common\Equality;
use Stringable;

/**
 * Interface Identity
 * @package JeckelLab\Contract\Application\Domain\Identity
 * @psalm-immutable
 */
interface Identity extends Equality, Stringable
{

}
