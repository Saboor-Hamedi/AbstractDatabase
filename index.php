<?php 
declare(strict_types=1);
require_once __DIR__ . '/app/func/bootstrap.php';
use AbstractDatabase\core\App; 
$app = new App();
$app->get('/');
$app->get('/about/team');
echo $app->run();
