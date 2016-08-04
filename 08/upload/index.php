<?php
var_dump($_FILES);
$typefile = $_FILES['file']['type'];
$namefile = $_FILES['file']['name'];
$pathfile = $_FILES['file']['tmp_name'];

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <link href="style.css" rel="stylesheet">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
     <title></title>
   </head>
   <body>
     <form class="" action="index.php" method="post" enctype="multipart/form-data">
       <input type="file" name="file" value="">
       <input type="submit" name="name" value="upload">
     </form>
     <?php
     if($typefile == 'image/png' || $typefile == 'image/jpeg') { // проверка типа файла jpg/png
        if(isset($namefile)) { // проверка есть ли файл
         move_uploaded_file($pathfile, __DIR__ . "/$namefile"); // загрузка файла (ДВОЙНЫЕ КАВЫЧКИ)
         echo 'Ваш файл ' . $namefile . ' загружен';
        }else{
         echo 'забыл загрузить файл';
        }
     }else{
       echo 'Загружать можно только jpg/png';
     }
     ?>
   </body>
 </html>
