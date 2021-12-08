<?php

declare(strict_types=1);

namespace Forkrefactor\Ddd\Tests\Domain\Model;

use Forkrefactor\Ddd\Domain\Model\Snapshot;
use PHPUnit\Framework\TestCase;

class SnapshotTest extends TestCase
{
    /**
     * @test
     */
    public function given_query_when_ask_to_get_type_then_return_expected_info()
    {
        $this->assertEquals('snapshot', Snapshot::messageType());
    }
}
