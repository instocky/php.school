<?php
include __DIR__ . '/function.php';
$chunks = getGeocode($_POST[search]);
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
    <form class="" action="mapgeo.php" method="post">
      <input type="text" name="search" value="<?php echo $_POST[search]; ?>">
      <input type="submit">
    </form>
    <p>
      Широта:<?php echo $chunks[0]; ?>
    </p>
    <p>
      Долгота:<?php echo $chunks[1]; ?>
    </p>
  </body>
</html>
