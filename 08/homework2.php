<?php
// функция &&
function fConjunction($a, $b) {
  $c = $a & $b;
  return $c;
}

// функция ||
function dConjunction($a, $b) {
  $c = $a | $b;
  return $c;
}

// функция xor
function xtion($a, $b) {
  if($a xor $b) {
    return 1;
  }
  return 0;
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
    <table>
      <caption>Конъюнкция</caption>
      <tr>
        <td>a</td>
        <td>b</td>
        <td>a^b</td>
      </tr>
      <tr>
        <td>0</td>
        <td>0</td>
        <td><?php echo fConjunction(0, 0); ?></td>
      </tr>
      <tr>
        <td>0</td>
        <td>1</td>
        <td><?php echo fConjunction(0, 1); ?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>0</td>
        <td><?php echo fConjunction(1, 0); ?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>1</td>
        <td><?php echo fConjunction(1, 1); ?></td>
      </tr>
    </table>
    <table>
      <caption>Дизъюнкция</caption>
      <tr>
        <td>a</td>
        <td>b</td>
        <td>a | b</td>
      </tr>
      <tr>
        <td>0</td>
        <td>0</td>
        <td><?php echo dConjunction(0, 0); ?></td>
      </tr>
      <tr>
        <td>0</td>
        <td>1</td>
        <td><?php echo dConjunction(0, 1); ?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>0</td>
        <td><?php echo dConjunction(1, 0); ?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>1</td>
        <td><?php echo dConjunction(1, 1); ?></td>
      </tr>
    </table>
    <table>
      <caption>Исключающее ИЛИ</caption>
      <tr>
        <td>a</td>
        <td>b</td>
        <td>a xor b</td>
      </tr>
      <tr>
        <td>0</td>
        <td>0</td>
        <td><?php echo xtion(0, 0); ?></td>
      </tr>
      <tr>
        <td>0</td>
        <td>1</td>
        <td><?php echo xtion(0, 1); ?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>0</td>
        <td><?php echo xtion(1, 0); ?></td>
      </tr>
      <tr>
        <td>1</td>
        <td>1</td>
        <td><?php echo xtion(1, 1); ?></td>
      </tr>
    </table>
  </body>
</html>
