<?php

namespace AbstractDatabase\Database\factory;

use AbstractDatabase\Models\Users;
use Faker\Factory as Faker;

class UsersFactory
{
  protected  $faker;
  public function __construct()
  {
    $this->faker = Faker::create();
  }
  public  function create(): array
  {
    
    return [
      'username' => $this->faker->firstName,
      'email' => $this->faker->unique()->safeEmail,
      'password' => $this->pass(123), // password
      'roles' => $this->faker->randomElement([0,2]),
    ];
  }
  public function pass($arg){
    return password_hash($arg, PASSWORD_DEFAULT);
  }
}
