<?php

use \Fuel\Core\Controller_Rest;
use \Model\User;

class Controller_User extends Controller_Rest
{
  /**
   * response format
   *
   * @var string
   */
  protected $format = 'json';

  /**
   * get user data
   *
   */
  public function get_data()
  {
    $user_id = ($this->param('id') !== '') ? $this->param('id') : '';

    $users = [];
    if ($user_id) {
      // todo: get user data
    } else {
      $users = User::get_users();
    }

    return $this->response($users);
  }

  /**
   * create user
   *
   */
  public function post_data()
  {
    // todo: create user
  }

  /**
   * update user data
   *
   */
  public function put_data()
  {
    // todo: user data update
  }

  /**
   * delete user
   *
   */
  public function delete_data()
  {
    // todo: delete user
  }

}