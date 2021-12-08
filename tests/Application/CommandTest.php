<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Tests\Application;

use Forkrefactor\Ddd\Application\Command;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    /**
     * @test
     */
    public function given_command_when_ask_to_get_type_then_return_expected_info()
    {
        $this->assertEquals('command', Command::messageType());
    }
}
