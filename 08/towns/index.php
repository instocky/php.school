<?php
include __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Игра в города</title>
  </head>
  <body>
    <h1>Игра в города</h1>
    <p>
      Сделайте ход - введите в поле город и сервер ответит вам!
    </p>
    <form class="" action="index.php" method="post">
      <input type="text" name="town" value="<?php echo $_POST['town']; ?>">
      <input type="submit" name="" value="GO!">
    </form>
    <?php
      $lastChair = substr($_POST['town'], strlen($_POST['town']) - 2);
      $lastChair = mb_strtoupper($lastChair, 'UTF-8');

      foreach ($t as $value) {
        $firstChair =  mb_substr($value,0,1,'UTF-8'); // http://php.net/manual/ru/function.mb-substr.php
        if($lastChair == $firstChair) { // сравниваем буквы первую и последнюю
          echo $value . '<br>';

          echo 'Ваш ход';
          break;
        }
      }
      if($lastChair != $firstChair) {
      echo 'Вы выиграли';
      }
    ?>
  </body>
</html>
