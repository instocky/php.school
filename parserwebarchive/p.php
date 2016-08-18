<?php
$link = file(__DIR__ . '/links1.txt');
var_dump($link);
foreach ($link as $key => $value) {
  $name = 1;
  // $name = $value

$file = file_get_contents('$value');
file_put_contents(__DIR__ . "/$name.html", $file);
}

 ?>
