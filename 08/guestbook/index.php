<?php
// функция чтения записей из файла
function readRecordsToMassive ($path)
{
  $array = file($path);
  return $array;
}
// var_dump(readRecordsToMassive(__DIR__ . '/records.txt'));
$recs = readRecordsToMassive(__DIR__ . '/records.txt');
// assert(readRecordsToMassive() == )
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
     <?php
     foreach ($recs as $value) { ?>
      <p><?php echo $value; ?></p>
     <?php } ?>

     <form class="" action="records.php" method="post">
       <textarea name="records" rows="8" cols="40"></textarea><br>
       <input type="submit" name="name" value="Добавить запись">
     </form>
   </body>
 </html>
