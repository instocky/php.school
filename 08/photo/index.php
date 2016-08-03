<?php
// галерея
$image = [
  1 => 'card.png',
  2 => 'man.png',
  3 => 'woman.png'
];
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <style media="screen">
      .photo {
        border: 3px solid gray;
        width: 350px;
        margin: 10px;
      }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Фотогалерея</title>
  </head>
  <body>
    <h1>Фотогалерея</h1>
    <?php foreach ($image as $value) {
      ?>

    <div class="photo">
      <a href="/08/photo/image.php?file=<?php echo $value; ?>">
      <img src="imgs/<?php echo $value; ?>" alt="" height="250"/>
      </a>
    </div>
    <?php } ?>

  </body>
</html>
