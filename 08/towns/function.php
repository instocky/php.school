<meta charset="utf-8">
<?php
include __DIR__ . '/data.php';
// функция (и тест для нее), которая по первой букве названия города вёрнет из этого массива первое встреченное название
function townSearch ($array, $letter)
{
  foreach ($array as $value) {
    $firstLetter = mb_substr($value, 0, 1, 'UTF-8');
    if($letter == $firstLetter) {
      return $value;
    }
  }
}
var_dump($t);
assert(townSearch($t, 'К') == 'Киров');
assert(townSearch($t, 'Т') == 'Тула');
assert(townSearch($t, 'Б') == 'Брянск');
 ?>
