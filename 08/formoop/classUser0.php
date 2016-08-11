<?php

/**
 *
 */
class User
{
  public $login;
  public $password;
  public $checkbox;
  protected $db;


  public function __construct()
  {
    # code...
  }

  public function newUser()
  {
    echo '<br>Вы новый пользователь сайта';
  }

  public function loginUser()
  {
    echo '<br>Прочитать, проверить данные введеные user. Если да пустить на сайт нет вернуть форму ввода';
  }


  public function logoutUser()
  {
    echo '<br>Проверить есть ли кнопка выхода. Сбросить в БД checkbox "remember" и выйти. Выдать форму входа на сайт.';
  }

  public function writeUserDB()
  {
    echo '<br>Метод записывает в БД login/password/checkbox=remember';
  }

  public function readUserDB()
  {
    echo '<br>Метод читает из БД login/password/checkbox=remember';
  }


}




 ?>
