<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 08/12/2021
 */

declare(strict_types=1);

namespace JeckelLab\Contract\Core\QueryDispatcher\Exception;

use JeckelLab\Contract\Core\QueryDispatcher\Query\Query;
use LogicException;

/**
 * Class NoHandlerDefinedForQueryException
 * @package JeckelLab\Contract\Core\QueryDispatcher\Exception
 * @psalm-immutable
 * @psalm-suppress MutableDependency
 */
class NoHandlerDefinedForQueryException extends LogicException implements QueryDispatcherException
{
    /**
     * @param Query $query
     */
    public function __construct(Query $query)
    {
        parent::__construct(sprintf('No query handler found for query %s', get_class($query)));
    }
}
