<?php

class SchoolClass
{
  public $numbers; // число учеников
  public $special; // специализация(математика, физика ...)
  public $place; // на каком этаже находится класс
  public $name = 'Иван Иванович'; // имя-отчество
  public $surname = 'Иванов'; // фамилия
  public $age = 25; // возраст
  public $profession = 'профессия'; // возраст

  function __construct($numbers = 20, $special = '', $place = 1, $name = 'Иван Иванович', $surname = 'Иванов', $profession = 'охранник', $age = 25)
  {
    // echo 'В классе ' . $this->special = $special . ' ' . $this->numbers = $numbers . ' учеников.<br>' . $this->place = $place . '-й этаж.<br>';
           $this->name = $name;
           $this->surname = $surname;
           $this->profession = $profession;
           $this->age = $age;
  }
}

/**
 * люди
 */
class People extends SchoolClass
{ public $form = 'cicle';
  // function __construct($name = 'Иван Иванович', $surname = 'Иванов', $position = 'охранник', $age = 25)
  // {
  //        $this->name = $name;
  //        $this->surname = $surname;
  //        $this->position = $position;
  //        $this->age = $age;
  // }
  public function setPosition($value = 'Учитель младших классов')
  {
    $this->position = $value;
  }
}

/**
 *
 */
class Teacher extends People
{
  public $specialty; // специальность
  // public $

  // function __construct($specialty = 'учитель младших классов')
  // {
  //   $this->name = $name;
  //   $this->surname = $surname;
  //   $this->position = $position;
  //   $this->age = $age;
  //   $this->specialty = $specialty;
  // }
}
