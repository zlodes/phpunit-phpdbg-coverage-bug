<?php

declare(strict_types=1);

namespace Zlodes\PhpUnitCoverageBugDemo\Tests\Dummy;

use Zlodes\PhpUnitCoverageBugDemo\Demo;

class Caller
{
    public function call(): bool
    {
        $demo = new Demo();

        $demo->nonAbstractMethod();

        return true;
    }
}
