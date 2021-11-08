<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 08/11/2021
 */

namespace JeckelLab\Contract\Core\QueryDispatcher\QueryHandler;

use JeckelLab\Contract\Core\QueryDispatcher\Exception\InvalidQueryException;
use JeckelLab\Contract\Core\QueryDispatcher\Query\Query;
use JeckelLab\Contract\Presentation\ViewModel\ViewModel;

interface QueryHandler
{
    /**
     * @return array<class-string<Query>>
     * @psalm-mutation-free
     */
    public static function getHandledQueries(): array;

    /**
     * @param Query $query
     * @return ViewModel
     * @throws InvalidQueryException
     */
    public function __invoke(Query $query): ViewModel;
}
