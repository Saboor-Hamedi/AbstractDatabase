<?php

namespace AbstractDatabase\Database;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{

  protected $capsule;
  public function __construct()
  {
    $this->capsule = new Capsule; {
      $this->capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'port'  => '3307',
        'database'  => 'school',
        'username'  => 'admin',
        'password'  => 'saboor123',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
      ]);
      $this->capsule->bootEloquent();
    }
  }
 
}
