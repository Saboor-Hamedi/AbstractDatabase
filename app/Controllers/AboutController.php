<?php

declare(strict_types=1);

namespace AbstractDatabase\Controllers;

use AbstractDatabase\core\TemplateEngine;


class AboutController
{
    public function __construct(private TemplateEngine $view)
    {
    }
    public function about()
    {
        echo $this->view->render('about.php');
    }
}
