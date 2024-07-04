<?php

declare(strict_types=1);

namespace AbstractDatabase\Config;

use AbstractDatabase\Controllers\AboutController;
use AbstractDatabase\Controllers\HomeController;
use AbstractDatabase\Controllers\RegisterController;
use AbstractDatabase\core\App;

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/register/index', [RegisterController::class, 'index']);
    $app->post('/register/store', [RegisterController::class, 'store']);
}
