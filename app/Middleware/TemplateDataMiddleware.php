<?php

declare(strict_types=1);

namespace AbstractDatabase\Middleware;

use AbstractDatabase\Contracts\MiddlewareInterface;
use AbstractDatabase\core\TemplateEngine;

class TemplateDataMiddleware implements MiddlewareInterface
{
    /**
     * The goal is to acces $title within middleware
     * support dependency injection in middleware
     */
    public function __construct(protected TemplateEngine $view)
    {
    }
    public function process(callable $nex)
    {
        echo 'I am TEMPATEDATA';
    }
}
