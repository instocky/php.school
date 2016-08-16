<?php
// если работать с массивами, в отличии от функции rand, то можно сохранять результаты игры и выводить их в таблицу
// $input = array(1, 2, 3, 4, 5, 6);
// $number = array_rand($input, 2)
// $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
// shuffle($input);
// if ($input[0] == 'Trinity') {
//   echo 'Trinity';
// } else {
//   echo 'Еще раз?';
// }

// второй вариант
// $rand_keys = array_rand($input);
// if ($input[$rand_keys] == 'Trinity') {
//   echo 'Trinity';
// } else {
//   echo 'Еще раз?';
// }

?>
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Сыграем в кости</title>
  </head>
  <body>
    <h2>Нажми F5</h2>
    <div style="font-size: 40px; text"><b>
      <!-- <?php echo $number[0] . ' : ' . $number[1]; ?> -->
      <?php echo rand(1, 6) . ' : ' . rand(1, 6); ?>
    </b>
    </div>

  </body>
</html>
