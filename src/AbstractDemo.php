<?php

declare(strict_types=1);

namespace Zlodes\PhpUnitCoverageBugDemo;

abstract class AbstractDemo
{
    public function nonAbstractMethod(): void
    {
        $callback = function () {
            $this->foo();
        };

        $callback();
    }

    /**
     * @return bool
     */
    abstract public function foo(): bool;
}
