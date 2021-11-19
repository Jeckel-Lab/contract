<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Kernel\QueryBus;

use JeckelLab\Contract\Application\Query\Query;
use JeckelLab\Contract\Application\Query\QueryResult;

/**
 * Interface QueryBusInterface
 * @package JeckelLab\Contract\Kernel\QueryBus
 */
interface QueryBus
{
    /**
     * @param Query $query
     * @return QueryResult
     */
    public function dispatch(Query $query): QueryResult;
}
