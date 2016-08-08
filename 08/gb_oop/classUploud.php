<?php
class Uploader
{
  public $path;
  public $name;
  public $namefile;

  public function __construct()
  {
    $this->name = 'nameform';
  }

  public function isUploaded()
  {
    if($_FILES[$this->name]['name'] == true and 0 == $_FILES[$this->name]['error']) {
      // $this->name = $_FILES[$this->name]['name'];
      return true;
    }else{
      return false;
    }
  }

  public function upLoad($a = 0)
  {
    if($a == true) {
      $name = $_FILES[$this->name]['name'];
      move_uploaded_file($_FILES[$this->name]['tmp_name'], __DIR__ . "/$name");
      $this->namefile = $name;
      return true;
      // return $name;
    } else {
      return false;
    }

  }
}


 ?>
