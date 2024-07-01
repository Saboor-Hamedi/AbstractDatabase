<?php
require_once __DIR__ . '/app/func/bootstrap.php';

use AbstractDatabase\Controllers\{HomeController, AboutController};
use AbstractDatabase\core\App;

$app = new App();
$app->get('/', [HomeController::class, 'home']);
$app->get('/about', [AboutController::class, 'about']);
$app->run();
