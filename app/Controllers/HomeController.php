<?php

declare(strict_types=1);

namespace AbstractDatabase\Controllers;

use AbstractDatabase\core\TemplateEngine;

class HomeController
{


    public function __construct(protected TemplateEngine $view)
    {
    }
    public function home()
    {

        echo $this->view->render('index.php');
    }
}
