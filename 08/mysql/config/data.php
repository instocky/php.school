<?php
include __DIR__ . '/config.php';

// Создайте класс DB
 // - В конструкторе устанавливается и сохраняется соединение с базой данных. Параметры соединения берем из файла конфига
 // - Метод execute(string $sql) выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение
 // - Метод query(string $sql, array $data) выполняет запрос, подставляет в него данные $data, возвращает данные результата запроса либо false, если выполнение не удалось

/**
 *
 */
class DB
{
  public $dbh; // соединение с БД

  function __construct($dsn, $name, $password)
  {
    $dbh = new PDO($dsn, $name, $password);
    // echo 'connect successful';
    $this->dbh = $dbh;

  }
}


 ?>
