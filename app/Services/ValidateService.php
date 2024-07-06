<?php

declare(strict_types=1);

namespace AbstractDatabase\Services;

use AbstractDatabase\core\Validator;
use AbstractDatabase\Rules\EmailRule;
use AbstractDatabase\Rules\inRule;
use AbstractDatabase\Rules\MatchRule;
use AbstractDatabase\Rules\MinRule;
use AbstractDatabase\Rules\RequireRule;
use AbstractDatabase\Rules\UrlRule;

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
        $this->validator->add('url', new UrlRule());
        $this->validator->add('match', new MatchRule());
    }
    public function ValidateRegister(array $formData)
    {
        $this->validator->validate($formData, [
            'email' => ['required', 'email'],
            'age' => ['required', 'min:18'],
            'countries' => ['required'],
            'media' => ['required', 'url'],
            'password' => ['required'],
            'confirmPassword' => ['required', 'match:password'],
            'accept' => ['required'],
        ]);
    }
}
