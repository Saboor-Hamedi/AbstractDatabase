<?php

declare(strict_types=1);

namespace AbstractDatabase\Services;

use AbstractDatabase\core\Validator;
use AbstractDatabase\Rules\EmailRule;
use AbstractDatabase\Rules\inRule;
use AbstractDatabase\Rules\MinRule;
use AbstractDatabase\Rules\RequireRule;

class ValidateService
{
    protected Validator $validator;
    public function __construct()
    {
        $this->validator = new Validator();
        $this->validator->add('required', new RequireRule());
        $this->validator->add('email', new EmailRule());
        $this->validator->add('min', new MinRule());
        $this->validator->add('in', new inRule());
    }
    public function ValidateRegister(array $formData)
    {
        $this->validator->validate($formData, [
            'email' => ['required', 'email'],
            'age' => ['required', 'min:18'],
            'countries' => ['required', 'in:USA, Canada, Mexico'],
            'media' => ['required'],
            'password' => ['required'],
            'confirmPassword' => ['required'],
            'accept' => ['required'],
        ]);
    }
}
