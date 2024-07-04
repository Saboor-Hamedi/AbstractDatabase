<?php

declare(strict_types=1);

namespace AbstractDatabase\Config;

use AbstractDatabase\core\App;
use AbstractDatabase\Middleware\TemplateDataMiddleware;

function registerMiddleware(App $app)
{
    $app->addMiddleware(TemplateDataMiddleware::class);
}
