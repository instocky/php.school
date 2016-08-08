<?php

/**
 *
 */
class Guestbook
{
  public $path = '/records.txt';
  public $arr; // массив гостевой книги
  public function __construct($a = NULL, $b = NULL)
  {
    
  }

  public function getData()
  {
    $this->arr = file(__DIR__ . $this->path);
  }

  public function append()
  {
    if(isset($_POST['text']) and $_POST['text'] == true) {
      $arr = $this->arr;
      $arr[] = $_POST['text'] . "\n"; // запись текста из текстового поля в массив с переносом строки
      $this->arr = $arr;
    }
  }

  public function save() // сохранение измененного массива в файл
  {
    file_put_contents(__DIR__ . $this->path, $this->arr);
  }

  public function outRecord() // вывод на печать массива с данными
  {
    foreach ($this->arr as $value) {
      echo $value . '<br>';
    }
  }
}
