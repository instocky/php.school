<?php
if($_POST['number'] == true) {
  switch ($_POST['number']) {
    case '1':
      echo '1';
      break;

    case '2':
      echo '2';
      break;

    case '3':
      echo '3';
      break;

    case '4':
      echo '4';
      break;

    case '5':
      echo '5';
      break;


    default:
      echo 'введите число от 1 до 5';
      break;
  }
  // var_dump($_POST);
}

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
     <form class="" action="temp.php" method="post">
       <input type="text" name="number" value="">
       <input type="submit" name="name" value="Отправить">
     </form>
   </body>
 </html>
