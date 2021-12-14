<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 08/12/2021
 */

namespace JeckelLab\Contract\Core\QueryDispatcher\QueryBus;

use JeckelLab\Contract\Core\QueryDispatcher\Query\Query;
use JeckelLab\Contract\Core\QueryDispatcher\ViewModel\ViewModel;

interface QueryBus
{
    /**
     * @param Query $query
     * @return ViewModel
     */
    public function dispatch(Query $query): ViewModel;
}
