<?php

declare(strict_types=1);

namespace AbstractDatabase\core;

class Router
{
  /**
   * Multiple middleware can be store a router class
   * 
   */
  protected array $middlewares = []; // initial value is empty

  protected array $routes = [];
  public function add(string $method, string $path, array $controller)
  {
    $this->normalizePath($path);
    $this->routes[] = [
      'path' => $path,
      'method' => strtoupper($method),
      'controller' => $controller // value
    ];
  }
  protected function normalizePath(string $path): string
  {
    return $this->compilePath($path);

    // ----------not working properly
    /**
     * This is not working properly:
     * On the url it must be like this /home/GET, but it gives me this 
     * homeGET
     * the second codes works fine
     */
    // $path = '/' . trim($path, '/') . '/';
    // $path = "/{$path}/";
    // $path = preg_replace('#[/]{2,}#', '/', $path);
    // return trim($path, '/');

  }
  public function compilePath(string $path): string
  {
    // Ensure there is a single leading and trailing slash
    $path = '/' . trim($path, '/');
    // Replace multiple consecutive slashes with a single slash
    $path = preg_replace('#/+#', '/', $path);
    return $path;
  }
  public function dispatch(string $path, string $method, Container $container = null)
  {
    $path = $this->normalizePath($path); // normalize the path first
    $method = strtoupper($method); // call the method
    /**
     * check if a route exists
     */
    foreach ($this->routes as $route) {
      if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method) {
        continue;
      }

      // Route found
      [$class, $functions] = $route['controller'];
      $controllerInstance = $container ? $container->resolve($class) : new $class;
      if (!method_exists($controllerInstance, $functions)) {
        echo "Method {$functions} does not exist in controller {$class}";
        return;
      }

      $action = fn () => $controllerInstance->{$functions}();
      foreach ($this->middlewares as $middleware) {
        $middlewareInstance = $container ?
          $container->resolve($middleware) :
          new $middleware;
        $action = fn () => $middlewareInstance->process($action);
      }
      $action();

      return;
    }
    echo "Route not found for path: {$path} and method: {$method}";
  }
  public function addMiddleware(string $middleware)
  {
    $this->middlewares[] = $middleware;
  }
}
