<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/12/2021
 */

namespace Tests\JeckelLab\Contract\Core\QueryDispatcher\QueryBus\Exception;

use JeckelLab\Contract\Core\QueryDispatcher\QueryBus\Exception\NoHandlerDefinedForQueryException;
use PHPUnit\Framework\TestCase;

/**
 * Class NoHandlerDefinedForQueryExceptionTest
 * @package Tests\JeckelLab\Contract\Core\QueryDispatcher\QueryBus\Exception
 * @psalm-suppress PropertyNotSetInConstructor
 */
class NoHandlerDefinedForQueryExceptionTest extends TestCase
{
    public function testConstructor(): void
    {
        $this->assertSame(
            'No query handler found for query ' . FakeQuery::class,
            (new NoHandlerDefinedForQueryException(new FakeQuery()))->getMessage()
        );
    }
}
