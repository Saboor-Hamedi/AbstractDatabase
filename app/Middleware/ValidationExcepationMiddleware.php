<?php

declare(strict_types=1);

namespace AbstractDatabase\Middleware;

use AbstractDatabase\Contracts\MiddlewareInterface;
use AbstractDatabase\core\Exception\ValidationException;

use function AbstractDatabase\func\redirectTo;

class ValidationExcepationMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        try {

            $next();
        } catch (ValidationException $e) {
            $oldFormData = $_POST;
            $_SESSION['errors'] = $e->errors;
            $referer = $_SERVER['HTTP_REFERER']; // redirect to the same directory which request came from
            $_SESSION['oldFormData'] = $oldFormData; // store the old data, on the form;
            redirectTo($referer);
        }
    }
}
