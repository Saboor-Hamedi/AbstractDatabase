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

        $this->view->addGlobal('errors', $_SESSION['errors'] ?? []); // display the errors variable on vewis
        unset($_SESSION['errors']);
        $this->view->addGlobal('oldFormData', $_SESSION['oldFormData'] ?? []); // keep the old data in the input
        unset($_SESSION['oldFormData']);
        $next();
    }
}
