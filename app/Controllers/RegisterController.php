<?php

declare(strict_types=1);

namespace AbstractDatabase\Controllers;

use AbstractDatabase\core\TemplateEngine;
use AbstractDatabase\Services\ValidateService;

class RegisterController
{
    public function __construct(
        protected TemplateEngine $view,
        protected ValidateService $services
    ) {
    }

    public function index()
    {
        echo $this->view->render('register/index.php');
    }
    public function store()
    {
        dd($this->services->ValidateRegister($_POST));
    }
}
