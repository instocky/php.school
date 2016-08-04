<meta charset="utf-8">
<?php
$t = ['Киров', 'Тула', 'Чебоксары', 'Калининград', 'Курск', 'Улан-Удэ', 'Ставрополь', 'Магнитогорск', 'Тверь', 'Иваново', 'Брянск', 'Севастополь', 'Сочи', 'Белгород', 'Нижний Тагил', 'Владимир', 'Архангельск', 'Калуга', 'Сургут', 'Чита', 'Симферополь', 'Смоленск', 'Волжский', 'Курган', 'Орёл', 'Череповец', 'Вологда', 'Владикавказ', 'Мурманск', 'Саранск', 'Якутск', 'Тамбов', 'Грозный', 'Стерлитамак', 'Кострома', 'Петрозаводск', 'Нижневартовск', 'Йошкар-Ола', 'Новороссийск', 'Балашиха', 'Комсомольск-на-Амуре', 'Таганрог'];

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

// блок тестирования функции townSearch
assert(townSearch($t, 'К') == 'Киров');
assert(townSearch($t, 'Т') == 'Тула');
assert(townSearch($t, 'Б') == 'Брянск');
// assert(townSearch($t, 'Ь') == 'Брянск');
 ?>