<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/12/2021
 */

namespace Tests\JeckelLab\Contract\Core\CommandDispatcher\CommandBus\Exception;

use JeckelLab\Contract\Core\CommandDispatcher\Exception\NoHandlerDefinedForCommandException;
use PHPUnit\Framework\TestCase;

/**
 * Class NoHandlerDefinedForCommandExceptionTest
 * @package Tests\JeckelLab\Contract\Core\CommandDispatcher\CommandBus\Exception
 * @psalm-suppress PropertyNotSetInConstructor
 */
class NoHandlerDefinedForCommandExceptionTest extends TestCase
{
    public function testConstructor(): void
    {
        $this->assertSame(
            'No command handler found for command ' . FakeCommand::class,
            (new NoHandlerDefinedForCommandException(new FakeCommand()))->getMessage()
        );
    }
}
