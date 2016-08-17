<?php
include __DIR__ . '/config/config.php';
include __DIR__ . '/config/data.php';

var_dump(PDO::getAvailableDrivers());
echo $dsn;
$obj = new DB($dsn, 'root', '');
$t[] = $obj->dbh;
var_dump($t);
 ?>
