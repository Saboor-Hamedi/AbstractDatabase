<?php 
namespace AbstractDatabase\Models;
use Illuminate\Database\Eloquent\Model;
class Users extends Model{
  protected $table = 'users';
  public $timestamps  = false;
  protected $fillable = [
    'username', 'email', 'password','created_at', 'roles'
  ];
}
