<?php
include __DIR__ . '/class.php';
$rec = new Guestbook();
$rec->getData();
$rec->append();
$rec->save();
$rec->outRecord();
?>
<form class="" action="temp.php" method="POST">
  <textarea name="text" rows="8" cols="40"></textarea><br>
  <input type="submit" name="name" value="Отправить">
</form>
