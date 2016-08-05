<meta charset="utf-8">
<?php
include '/config/function.php';
// $namefile = '../temp.txt';
// recordComment('../temp.txt');
$res = recComment('config/22');
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Гостевая книга</title>
  </head>
  <body>
    <h1>Гостевая книга</h1>

    <?php
      $rec = file('config/22');
      foreach ($rec as $value) {
        echo $value . '<br>';
      }
      echo '<br>';
      if($res == false){
        echo 'Введите текст и нажмите кнопку отправить';
      }else{
        echo 'Запись добавлена';
      }
     ?>

    <form class="" action="temp.php" method="post" style="margin-top: 20px">
      <textarea name="comm"></textarea><br><br>
      <input type="submit" name="name" value="Отправить">
    </form>
  </body>
</html>
