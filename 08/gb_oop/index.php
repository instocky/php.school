<?php
include __DIR__ . '/class.php';
$rec = new Guestbook();
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
     <h1>Гостевая книга</h1>
     <h2>Отзывы о сайте</h2>
     <?php $rec->getData();
           $rec->append();
           $rec->outRecord();
           $rec->save(); ?>
     <form class="" action="index.php" method="POST">
       <textarea name="text" rows="8" cols="40"></textarea><br>
       <input type="submit" name="name" value="Отправить">
     </form>
   </body>
 </html>
