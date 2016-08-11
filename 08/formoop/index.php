<?php
include __DIR__ . '/classUserToster.php';
var_dump($_POST);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>
    <form class="" action="form.php" method="post">
      <p>
        Login:
      </p>
      <input type="text" name="login" value="">
      <p>
        Password:
      </p>
      <input type="password" name="password" value="">
      <p>
        <input type="checkbox" name="remember" value="ok">
      </p>
      <p>
        <input type="submit" name="name" value="Отправить">
      </p>
    </form>
  </body>
</html>
