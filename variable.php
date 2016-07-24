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
unset($intVar);
echo isset($intVar) . '<br>';
