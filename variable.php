<meta charset="utf-8">

<?php
echo '<h1> Типы переменных </h1>';

$intVar = 10;
$floatVar = 10.5;
$stringVar = 'строка';
$boolVar = true;
$nullVar = null;
$arrVar = array();

echo '<h2>Проверка function isset()</h2>';
echo isset($intVar) . '<br>';
echo isset($Var) . '<br>';

echo '<h2>Проверка function unset()</h2>';
// unset($intVar);
echo isset($intVar) . '<br>';


//  Проверка типа переменной если не верно - ничего не выводится, 1-верно
echo is_integer($intVar) . "<br>";
echo is_bool($intVar) . " тип " . gettype($intVar);

// Преобразование типов
echo "<h2>Преобразование типов</h2>";

// Константа
define('MY_CONST', 100);
echo MY_CONST . '<br>';

// Условный оператор сравнеия в одну строку
echo (isset($intVar)) ? 'есть' : 'нет';

echo (2 > 1? "Passed the test " . $intVar : 'Failed the test<br>');
