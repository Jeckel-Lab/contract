<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/12/2021
 */

namespace Tests\JeckelLab\Contract\Domain\Identity\Exception;

use JeckelLab\Contract\Domain\Identity\Exception\InvalidIdException;
use PHPUnit\Framework\TestCase;

/**
 * Class InvalidIdExceptionTest
 * @package Tests\JeckelLab\Contract\Domain\Identity\Exception
 * @psalm-suppress PropertyNotSetInConstructor
 */
class InvalidIdExceptionTest extends TestCase
{
    public function testConstructorWithIndId(): void
    {
        $this->assertSame(
            'Invalid id "123" provided',
            (new InvalidIdException(123))->getMessage()
        );
    }

    public function testConstructorWithStringId(): void
    {
        $this->assertSame(
            'Invalid id "foobar" provided',
            (new InvalidIdException('foobar'))->getMessage()
        );
    }
}
