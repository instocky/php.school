<?php
// как правильно хранить пароли в БД
// https://www.youtube.com/watch?v=O49Rcle09IE&index=3&list=PLoonZ8wII66jVNtDG-2b1KipT1cpSK57O

$mypass = "123gh2";

// echo $hash = password_hash($mypass, PASSWORD_DEFAULT); // обратите внимание какая длина получается у пароля
$hash = password_hash($mypass, PASSWORD_DEFAULT);
$ps = password_verify($mypass, $hash); // верификация: здесь $mypass - вводимый пароль + $hash из БД
var_dump($ps);

?>
