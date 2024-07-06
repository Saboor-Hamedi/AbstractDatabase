<?php

declare(strict_types=1);

namespace AbstractDatabase\Middleware;

use AbstractDatabase\Contracts\MiddlewareInterface;
use AbstractDatabase\core\Exception\ValidationException;

use function AbstractDatabase\func\redirectTo;

class ValidationExceptionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        try {

            $next();
        } catch (ValidationException $e) {

            $oldFormData = $_POST;
            $excludedFields = ['password', 'confirmPassword']; // This will not allow password to be shown on form
            $formattedFormData = array_diff_key($oldFormData, array_flip($excludedFields));

            $_SESSION['errors'] = $e->errors;
            $referer = $_SERVER['HTTP_REFERER']; // redirect to the same directory which request came from
            $_SESSION['oldFormData'] = $formattedFormData; // store the old data, on the form;
            redirectTo($referer);
        }
    }
}
