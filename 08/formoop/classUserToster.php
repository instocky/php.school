<?php

/**
 *https://toster.ru/q/15538
 */
class User
{
  public $user_id;
  public $user_name;
  public $user_pass;
  public $user_email;

  public function __construct($name = 'name', $pass = 'pass')
  {
    // public $user_id;
    $this->user_name = $name;
    $this->user_pass = $pass;
    // public $user_email;
  }

  public function login()
  {
    // echo '<br>Отображает форму входа. Проверяет есть ли такой пользователь с паролем. Если да переводит на сайт ';
    if($this->user_name == $_POST['login'] and $this->user_pass == $_POST['password']) {
      // var_dump($_POST);
      // echo 'login/password similar';
      header('location:' . __DIR__ . '/protected.php');
    } else {
      header('location:' . __DIR__ . '/index.php');
    }
  }

  public function add_new_user()
  {
    echo '<br>Обрабатывает форму и заносит юзера в БД';
  }

  public function logout()
  {
    echo '<br>Проверяет есть ли кнопка выхода. Выдает форму входа на сайт. Те в конце метода выполняет метод login';
  }




}




 ?>
