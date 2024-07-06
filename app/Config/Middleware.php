<?php

declare(strict_types=1);

namespace AbstractDatabase\Config;

use AbstractDatabase\core\App;
use AbstractDatabase\Middleware\FlashMiddleware;
use AbstractDatabase\Middleware\SessionMiddleware;
use AbstractDatabase\Middleware\TemplateDataMiddleware;
use AbstractDatabase\Middleware\ValidationExceptionMiddleware;

/**
 * To register all middlewares,along with other necessities
 * The registerMiddleware is called on the index.php, later it will moved either on 
 * web.php or bootstrap.php
 */


function registerMiddleware(App $app)
{
    $app->addMiddleware(TemplateDataMiddleware::class); // register TemplateDataMiddleware
    $app->addMiddleware(ValidationExceptionMiddleware::class); // register ValidationExceptionMiddleware
    $app->addMiddleware(FlashMiddleware::class); // register SessionMiddleware
    $app->addMiddleware(SessionMiddleware::class); // register SessionMiddleware

}
