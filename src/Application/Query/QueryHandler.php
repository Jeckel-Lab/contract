<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

namespace JeckelLab\Contract\Application\Query;

/**
 * Interface QueryHandlerInterface
 * @package JeckelLab\Contract\Application\Query
 * @template T of Query
 */
interface QueryHandler
{
    /**
     * @psalm-param T $query
     * @param Query   $query
     * @return QueryResult
     */
    public function handle(Query $query): QueryResult;
}
