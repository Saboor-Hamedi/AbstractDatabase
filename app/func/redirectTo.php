<?php


declare(strict_types=1);

namespace AbstractDatabase\func;

function redirectTo(string $path)
{
    header("Location: {$path}");
    http_response_code(302);
    exit;
}
