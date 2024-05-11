<?php

namespace AbstractDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
  protected $table = 'students';
  public $timestamps  = false;
  protected $fillable = [
    'student_id',
    'lastname',
    'age', 
    'sex', 
  ];
}
