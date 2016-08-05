<?php
// функция записи комментария в файл в конец переменная имя файла
// пока не работает
function recordComment($namefile)
{
// читается файл в строку
$string = file_get_contents($namefile);
echo $namefile;
// если появился комментарий с именем 'COMM' строка дописывается с переносом строки
if($_GET['comm'] == true) {
  echo $string = $string . "\n" . $_GET['comm'];
}
// кладу в тот же файл перезаписывая последний
file_put_contents(__DIR__ . "/$namefile", $string);
}

// функция дописывания передаваемой переменной $_POST['comm'] в файл с новой строки
// в качестве аргумента принимает полный путь к файлу, относительно места выполнения функции

function recComment($fullpath)
{
  if(isset($_POST['comm'])and $_POST['comm'] == true) {
    $rec = "\n" . $_POST['comm'];
    file_put_contents($fullpath, $rec, FILE_APPEND);
    $string = file_get_contents($fullpath);
    // return $string;
    return true;
  }else{
    return false;
  }
}

 ?>
