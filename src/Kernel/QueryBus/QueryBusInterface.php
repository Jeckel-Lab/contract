<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Kernel\QueryBus;

use JeckelLab\Contract\Application\Query\QueryInterface;
use JeckelLab\Contract\Application\Query\QueryResultInterface;

/**
 * Interface QueryBusInterface
 * @package JeckelLab\Contract\Kernel\QueryBus
 */
interface QueryBusInterface
{
    /**
     * @param QueryInterface $query
     * @return QueryResultInterface
     */
    public function dispatch(QueryInterface $query): QueryResultInterface;
}
