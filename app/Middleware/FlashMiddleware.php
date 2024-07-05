<?php

declare(strict_types=1);

namespace AbstractDatabase\Middleware;

use AbstractDatabase\Contracts\MiddlewareInterface;

class FlashMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        $next();
    }
}
