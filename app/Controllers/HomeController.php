<?php

declare(strict_types=1);

namespace AbstractDatabase\Controllers;

use AbstractDatabase\core\TemplateEngine;
use AbstractDatabase\Config\Paths;

class HomeController
{
    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine(Paths::VIEWS);
    }
    public function home()
    {

        echo $this->view->render('index.php', [
            'title' => 'Home',
        ]);
    }
}
