<?php

declare(strict_types=1);

namespace AbstractDatabase\core;

use AbstractDatabase\core\Router;

class App
{
  protected Router $router;
  protected Container $container;
  public function __construct(string $containerDefinitionsPath = null)
  {
    $this->router = new Router();
    $this->container = new Container();
    if ($containerDefinitionsPath) {
      if (file_exists($containerDefinitionsPath)) {
        $containerDefinitions = require_once $containerDefinitionsPath;
        if (is_array($containerDefinitions)) {
          $this->container->addDefinitions($containerDefinitions);
        } else {
          throw new \Exception("container definitions file not return array:" . $containerDefinitionsPath);
        }
      } else {
        throw new \Exception("container definition not found" . $containerDefinitionsPath);
      }
    }
  }
  public function run()
  {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];
    $this->router->dispatch($path, $method, $this->container);
  }
  public function get(string $path, array $controller)
  {
    return $this->router->add('GET', $path, $controller);
  }
  public function post(string $path, array $controller)
  {
    return $this->router->add('POST', $path, $controller);
  }

  public function addMiddleware(string $middlware)
  {
    $this->router->addMiddleware($middlware);
  }
}
