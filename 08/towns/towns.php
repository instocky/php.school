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
    <form class="" action="towns.php" method="post">
      <input type="text" name="town" value="<?php echo $_POST['town']; ?>">
      <input type="submit" name="" value="GO!">
    </form>
    <?php
      $town = $_POST['town'];
      $lastLetter = mb_substr($_POST['town'], strlen($_POST['town']) - 2); // получение последней буквы
      $lastLetter = mb_strtoupper($lastLetter, 'UTF-8'); // перевод в верхния регистр
      $answer = townSearch($t, $lastLetter);
      if($answer == true) {
        echo $answer;
      }else{
        echo 'Вы обыграли сервер';
      }
    ?>
  </body>
</html>
