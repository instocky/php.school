<?php
$link = file(__DIR__ . '/links1.txt');
var_dump($link);
$null = '';
foreach ($link as $value) {
  echo $path = __DIR__ . $value;
  // file_put_contents($path, $null);
  file_put_contents($path, $null, FILE_APPEND | LOCK_EX);
  // file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
}

 ?>
