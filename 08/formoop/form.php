<?php
include __DIR__ . '/classUserToster.php';
// var_dump($_POST);
$user = new User;
$user->login();
echo $user->user_name;
$user->user_pass;
 ?>
