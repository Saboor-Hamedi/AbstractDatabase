<?php

declare(strict_types=1);


namespace AbstractDatabase\core;

use AbstractDatabase\Contracts\RuleInterface;
use AbstractDatabase\core\Exception\ValidationException;

class Validator
{
    protected array $rules = [];

    /**
     * validation: set rules here, 
     * this function accepts rules
     */
    public function add(string $alias, RuleInterface $rule)
    {
        $this->rules[$alias] = $rule;
    }
    public function validate(array $formData, array $fields)
    {
        $errors = [];
        foreach ($fields as $fieldName => $rules) {
            foreach ($rules as $rule) {
                // add age restriction 
                $ruleParams = [];
                if (str_contains($rule, ':')) {
                    [$rule, $ruleParams] = explode(':', $rule);
                    $ruleParams = explode(',', $ruleParams);
                    dd($ruleParams);
                }
                $ruleValidator = $this->rules[$rule];
                if ($ruleValidator->validate($formData, $fieldName, $ruleParams)) {
                    continue;
                }
                $errors[$fieldName][] = $ruleValidator->getMessage($formData, $fieldName, $ruleParams);
            }
        }
        if (count($errors)) {
            throw new ValidationException($errors);
            // dd($errors);
        }
    }
}
