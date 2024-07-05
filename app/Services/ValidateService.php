<?php

declare(strict_types=1);

namespace AbstractDatabase\Services;

use AbstractDatabase\core\Validator;
use AbstractDatabase\Rules\EmailRule;
use AbstractDatabase\Rules\RequireRule;

class ValidateService
{
    protected Validator $validator;
    public function __construct()
    {
        $this->validator = new Validator();
        $this->validator->add('required', new RequireRule());
        $this->validator->add('email', new EmailRule());
    }
    public function ValidateRegister(array $formData)
    {
        $this->validator->validate($formData, [
            'email' => ['required', 'email'],
            'age' => ['required', 'min:18'],
            'countries' => ['required'],
            'media' => ['required'],
            'password' => ['required'],
            'confirmPassword' => ['required'],
            'accept' => ['required'],
        ]);
    }
}
