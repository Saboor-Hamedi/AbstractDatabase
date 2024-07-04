<?php

declare(strict_types=1);

namespace AbstractDatabase\Middleware;

use AbstractDatabase\Contracts\MiddlewareInterface;


class TemplateDataMiddleware implements MiddlewareInterface
{
    public function process(callable $nex)
    {
        echo 'I am TEMPATEDATA';
    }
}
