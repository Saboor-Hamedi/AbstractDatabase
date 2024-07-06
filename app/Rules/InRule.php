<?php

declare(strict_types=1);

namespace AbstractDatabase\Rules;

use AbstractDatabase\Contracts\RuleInterface;

/**
 * Validate Select/Options
 */

class inRule implements RuleInterface
{

    protected array $options;
    public function __construct(array $options = [])
    {
        $this->options = array_map('trim', $options);
    }
    public function validate(array $data, string $field, array $params): bool
    {
        // return in_array($data[$field], $params);
        if (!isset($data[$field])) {
            return false;
        }

        $value = $data[$field];
        // var_dump($value);
        return in_array($value, $this->options);
    }
    public function getMessage(array $data, string $field, array $params): string
    {
        return "Invalid selection";
    }
}
