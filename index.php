<?php
require_once __DIR__ . '/app/func/bootstrap.php';

use AbstractDatabase\core\App;
use function AbstractDatabase\Config\registerRoutes;
use AbstractDatabase\Config\Paths;

$containerPath = Paths::SOURCE . "/func/container-definition.php";
$app = new App($containerPath);
registerRoutes($app);
$app->run();
