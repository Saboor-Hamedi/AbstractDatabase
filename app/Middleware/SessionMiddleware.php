<?php

declare(strict_types=1);

namespace AbstractDatabase\Middleware;

use AbstractDatabase\Contracts\MiddlewareInterface;
use AbstractDatabase\core\Exception\SessionException;


class SessionMiddleware implements MiddlewareInterface

{
    public function process(callable $next)
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            throw new SessionException("Session already active");
        }
        if (headers_sent($filename, $line)) {
            throw new SessionException("Header alread sent. 
            Considering enabling output buffering. 
            Data outputted from {$filename} - Line: {$line}.");
        }
        session_start();
        $next();

        session_write_close();
    }
}
