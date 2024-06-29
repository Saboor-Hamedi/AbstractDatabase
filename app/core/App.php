<?php 
declare(strict_types=1);
namespace AbstractDatabase\core;
use AbstractDatabase\core\Router;

class App {
  protected Router $router;
  public function __construct(){
    $this->router = new Router();
  }
  public function run(){
  }
  public function get(string $path){
    $this->router->add('GET',$path);
  }
}

