<?php

namespace Model;

use Fuel\Core\DB;
use Fuel\Core\Model;

class User extends Model
{
  public static function get_users()
  {
    return DB::select()->from('users')->execute()->as_array();
  }
}