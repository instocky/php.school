<?php

$login_password = "login=instocky&password=sMa123654&key=";
$key = "как стать программистом";
$region_deep = "&region=213&deep=20";
echo $req = $login_password . $key . $region_deep;

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
    <!--запрос по API http://smartkeys.pro/request.php  -->
    <form class="" action="http://smartkeys.pro/request.php?<?php echo $req; ?>" method="post">
      <input type="submit" name="name" value="">
    </form>

  </body>
</html>
