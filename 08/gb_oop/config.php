<?php
/** класс Guestbook
 *
 */
class Guestbook
{
  public $path = '/records.txt';
  public $arr = '';
  public function __construct()
  {
    $a = __DIR__ . $this->path;
    echo $arr = file($a);
    // var_dump($arr);
    return $arr;
  }

  // public function getData($value='')
  // {
  //   echo 'getData';
  // }
}

$object = new Guestbook;
// $object->getData();
// var_dump($object->arr = 55);
// // $arr = file($object->path);
// // var_dump($arr);
// $arr[] = 22;
// var_dump($arr);
 ?>
