<?php
// решение квадратного уравнения
// http://ege-ok.ru/2012/04/01/reshenie-kvadratnyih-uravneniy
// ax2+bx+c=0

// формула дискриминанта
// d = b2-4ac
function calcDiscr($a, $b, $c) {
  $d = $b*$b - 4 * $a * $c;
  return $d;
}
assert(calcDiscr(0,0,0) == 0);
assert(calcDiscr(1,0,2) == -8);
assert(calcDiscr(1,2,2) == -4);

// квадратное уравнение

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
    <h1>Решение квадратного уравнения</h1>
      <h2>4x<sup>2</sup>+2x-5=0</h2>
    <h3>Решение:</h3>
    <p>
      x1=<?php
      echo (-2 + sqrt(calcDiscr(4,2, -5)))/(2 * 4); ?>

    </p>
    <p>
      x2=<?php
      echo (-2 - sqrt(calcDiscr(4,2, -5)))/(2 * 4); ?>

    </p>
      <h2>x<sup>2</sup>+x=0</h2>
    <h3>Решение:</h3>
    <p>
      x1=<?php
      echo (-1 + sqrt(calcDiscr(1,1, 0)))/(2 * 1); ?>

    </p>
    <p>
      x2=<?php
      echo (-1 - sqrt(calcDiscr(1,1, 0)))/(2 * 1); ?>

    </p>
  </body>
</html>
