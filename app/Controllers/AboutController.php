<?php

declare(strict_types=1);

namespace AbstractDatabase\Controllers;

use AbstractDatabase\core\TemplateEngine;
use AbstractDatabase\Config\Paths;


class AboutController
{
    private TemplateEngine $view;
    public function __construct()
    {
        $this->view = new TemplateEngine(Paths::VIEWS);
    }
    public function about()
    {
        echo $this->view->render('about.php', [
            'title' => 'About Page'
        ]);
    }
}
