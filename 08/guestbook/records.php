<meta charset="utf-8">
<?php

$recs = file(__DIR__ . '/records.txt');
$recs = implode($recs);
$recs = $recs . $_POST['records'];
file_put_contents(__DIR__ . '/records.txt', $recs);

// require __DIR__ . '/index.php';
include __DIR__ . '/index.php';
?>
