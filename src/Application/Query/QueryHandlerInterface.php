<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

namespace JeckelLab\Contract\Application\Query;

/**
 * Interface QueryHandlerInterface
 * @package JeckelLab\Contract\Application\Query
 * @template T of QueryInterface
 */
interface QueryHandlerInterface
{
    /**
     * @psalm-param T $query
     * @param QueryInterface $query
     * @return QueryResultInterface
     */
    public function handle(QueryInterface $query): QueryResultInterface;
}
