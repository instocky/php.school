<?php
// калькуляятор
// var_dump($_GET);
$x = $_GET['x'];
$y = $_GET['y'];



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
     <form class="" action="homework3.1.php" method="get">
       <input type="number" name="x" value="<?php echo $x; ?>">
       +
       <input type="number" name="y" value="<?php echo $y; ?>">
       <input type="submit" name="" value="=">
       <?php echo $summ = $x + $y; ?>
     </form>
   </body>
 </html>
