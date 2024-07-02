<?php
require_once __DIR__ . '/app/func/bootstrap.php';

use AbstractDatabase\core\App;
use function AbstractDatabase\Config\registerRoutes;

$app = new App();
registerRoutes($app);
$app->run();
