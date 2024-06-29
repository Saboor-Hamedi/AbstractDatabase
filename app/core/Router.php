<?php

declare(strict_types=1);

namespace AbstractDatabase\core;

class Router
{
  protected array $routes = [];
  public function add(string $method,  string $path)
  {
    $this->normalizePath($path);
    $this->routes[] = [
      'path' => $path,
      'method' => strtoupper($method), 
    ];
  }
  protected function normalizePath(string $path): string{
    $path = trim($path, '/');
    $path = "/{$path}/";
    $path = preg_replace('#[/]{2,}#', '/', $path);
    return trim($path, '/');
  }
}
