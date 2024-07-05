<?php

declare(strict_types=1);

namespace AbstractDatabase\Middleware;

use AbstractDatabase\Contracts\MiddlewareInterface;
use AbstractDatabase\core\TemplateEngine;

class FlashMiddleware implements MiddlewareInterface
{
    public function __construct(protected TemplateEngine $view)
    {
    }
    public function process(callable $next)
    {
        $this->view->addGlobal('errors', $_SESSION['errors'] ?? []);
        unset($_SESSION['errors']);
        $next();
    }
}
