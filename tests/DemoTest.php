<?php

declare(strict_types=1);

namespace Zlodes\PhpUnitCoverageBugDemo\Tests;

use PHPUnit\Framework\TestCase;
use Zlodes\PhpUnitCoverageBugDemo\Tests\Dummy\Caller;

class DemoTest extends TestCase
{
    public function testDemoFooReturnsTrue(): void
    {
        $caller = new Caller();

        self::assertTrue($caller->call());
    }
}
