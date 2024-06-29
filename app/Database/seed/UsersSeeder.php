<?php

namespace AbstractDatabase\Database\seed;

use AbstractDatabase\Database\factory\UsersFactory;
use AbstractDatabase\Models\Users;

class UsersSeeder
{
  public static function run()
  {
    // $count = 100;
    // self::multipleRows($count);
    // return $count;
    
    self::singleRow();
  }
  public static function multipleRows(int $count)
  {
      $userFactory = new UsersFactory();
      for ($x = 0; $x < $count; $x++) {
          $userData = $userFactory->create();
          Users::create($userData);
      }
  }
  public static function singleRow()
  {
      $userFactory = new UsersFactory();
      $userData = $userFactory->create();
      return Users::create($userData);
  }
}
