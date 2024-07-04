<?php
require_once __DIR__ . '/app/func/bootstrap.php';

use AbstractDatabase\core\App;
use function AbstractDatabase\Config\registerRoutes;
use function AbstractDatabase\Config\registerMiddleware;
use AbstractDatabase\Config\Paths;

$containerPath = Paths::SOURCE . "/func/container-definition.php";
$app = new App($containerPath);
registerRoutes($app);
registerMiddleware($app);
$app->run();
