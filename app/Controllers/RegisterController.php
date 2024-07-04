<?php

declare(strict_types=1);

namespace AbstractDatabase\Controllers;

use AbstractDatabase\core\TemplateEngine;

class RegisterController
{
    public function __construct(protected TemplateEngine $view)
    {
    }

    public function index()
    {
        echo $this->view->render('register/index.php');
    }
    public function store()
    {
        dd($_POST);
    }
}
