<?php

namespace AbstractDatabase\controller;

use AbstractDatabase\Models\Users;

class UserController
{
  public function load()
  {
    $users = Users::orderBy('created_at', 'desc')->get();
    return $users;
  }
}
