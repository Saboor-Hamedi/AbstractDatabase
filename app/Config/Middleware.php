<?php

declare(strict_types=1);

namespace AbstractDatabase\Config;

use AbstractDatabase\core\App;
use AbstractDatabase\Middleware\SessionMiddleware;
use AbstractDatabase\Middleware\TemplateDataMiddleware;
use AbstractDatabase\Middleware\ValidationExcepationMiddleware;

function registerMiddleware(App $app)
{
    $app->addMiddleware(TemplateDataMiddleware::class); // this is for template, to pass data, like title 
    $app->addMiddleware(ValidationExcepationMiddleware::class); // this is for form validation 
    $app->addMiddleware(SessionMiddleware::class); // start session
}
