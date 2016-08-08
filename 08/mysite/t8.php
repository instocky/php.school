<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.08.2016
 * Time: 16:52
 */

require __DIR__ . '/config/classes/files.php';

$object = new files();
$object->getRecords('/../date/record.txt');

foreach ($object->arr as $value) {
    echo $value . '<br>';
}