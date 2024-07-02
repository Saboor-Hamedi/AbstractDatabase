<?php

declare(strict_types=1);

namespace AbstractDatabase\Config;

use AbstractDatabase\Controllers\AboutController;
use AbstractDatabase\Controllers\HomeController;
use AbstractDatabase\core\App;

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
}
