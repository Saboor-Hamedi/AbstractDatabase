<?php

declare(strict_types=1);

namespace AbstractDatabase\Contracts;

interface MiddlewareInterface
{
    public function process(callable $next);
}
