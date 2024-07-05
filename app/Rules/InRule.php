<?php

declare(strict_types=1);

namespace AbstractDatabase\Rules;

use AbstractDatabase\Contracts\RuleInterface;

/**
 * Validate Select/Options
 */

class inRule implements RuleInterface
{

    public function validate(array $data, string $field, array $params): bool
    {
        return in_array($data[$field], $params);
    }
    public function getMessage(array $data, string $field, array $params): string
    {
        return "Invalid selection";
    }
}
