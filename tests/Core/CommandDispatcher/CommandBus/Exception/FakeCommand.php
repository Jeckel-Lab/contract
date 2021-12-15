<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 15/12/2021
 */

declare(strict_types=1);

namespace Tests\JeckelLab\Contract\Core\CommandDispatcher\CommandBus\Exception;

use JeckelLab\Contract\Core\CommandDispatcher\Command\Command;

/**
 * Class FakeCommand
 * @package Tests\JeckelLab\Contract\Core\CommandDispatcher\CommandBus\Exception
 * @psalm-immutable
 */
final class FakeCommand implements Command
{

}
