<?php
// функция чтения записей из файла
function readRecordsToMassive ($path)
{
  $array = file($path);
  return $array;
}


 ?>
