<?php

declare(strict_types=1);

namespace AbstractDatabase\Controllers;

use AbstractDatabase\core\TemplateEngine;
use AbstractDatabase\Config\Paths;

class HomeController
{


    public function __construct(private TemplateEngine $view)
    {
    }
    public function home()
    {

        echo $this->view->render('index.php', [
            'title' => 'Home',
        ]);
    }
}
