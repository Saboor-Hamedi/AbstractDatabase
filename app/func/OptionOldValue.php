<?php

declare(strict_types=1);

namespace AbstractDatabase\func;

function load(array $oldFormData, string $key, string $value): string
{
    return isset($oldFormData[$key]) && $oldFormData[$key] === $value ? 'selected' : '';
}

// Define the check function
function check(array $oldFormData, string $key, string $value): string
{
    return isset($oldFormData[$key]) && $oldFormData[$key] === $value ? 'checked' : '';
}
