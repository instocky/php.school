<?php

$recs = file(__DIR__ . '/records.txt');
$link = __DIR__ . '/index.php';
$recs = implode($recs);
$recs = $recs . "\n" . $_POST['records'];
file_put_contents(__DIR__ . '/records.txt', $recs);
header('location: /08/guestbook/index.php');
// require __DIR__ . '/index.php';
// include __DIR__ . '/index.php';

?>
