<meta charset="utf-8">
<?php
// проверка окончания -а -я
function finish($name) {
  $lastletter = substr($name, -1);
  return $lastletter;
}

assert(finish('Maria') == 'a');
assert(finish('Natali') == 'i');


// $path = '/www/public_html/index.html';
// $filename = substr(strrchr($path, "/"), 1);
// echo $filename; // "index.html"
// echo '<br>';
// echo $ff = strrchr($path, "/");
$name = 'Irmo';

if(finish($name) == 'a' or finish($name) == 'i') {
  echo $name . ' - женское имя';
}else{
echo $name . ' - возможно мужское имя';
}
?>
