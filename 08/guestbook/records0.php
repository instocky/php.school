<meta charset="utf-8">
<?php
// include __DIR__ . '/data.php';
$recs = file(__DIR__ . '/records.txt');
echo $recs = implode("\n", $recs);
var_dump($_POST['records']);
var_dump($recs);

 ?>
