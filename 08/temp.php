<?php
function xtion($a, $b) {
  if($a xor $b) {
    return 1;
  }
  return 0;

}

assert(xtion(0, 0) == false);
assert(xtion(0, 1) == true);
assert(xtion(1, 0) == true);
assert(xtion(1, 1) == false);
// xor
// $a = 1;
// $b = 0;
// echo $a . $b;
// echo '<br>===========<br>';
// // echo $c = $a xor $b;
// var_dump($c = $a xor $b);
// echo '<br>===========<br>';
// // xtion($a, $b);
// var_dump(xtion(0, 1));
// var_dump(xtion($a, $b));

 ?>
