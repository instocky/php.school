<meta charset="utf-8">
<?php
// операции с файлами

// есть ли файл file_exists
// http://php.net/manual/ru/function.file-exists.php

if(file_exists('index0.php')) {
   echo "файл существует";
 }else{
   echo "нет такого файла";
}

// удаление файла unlink
// http://php.net/manual/ru/function.unlink.php
// unlink('test.html'); // дает ошибку если файл не существует

// открытие файла (для чтения или записи) или потока
// http://php.net/manual/ru/function.fopen.php
echo $temp = fopen('index0.php', 'r');
