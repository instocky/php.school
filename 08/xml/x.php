<?php
//Файл test.xml содержит XML-документ с корневым элементом
//и, по крайней мере, элемент /[root]/title.

if (file_exists('test.xml')) {
    $xml = simplexml_load_file('test.xml');

    // var_dump($xml);
} else {
    exit('Не удалось открыть файл test.xml.');
}
var_dump($xml->22);
?>
