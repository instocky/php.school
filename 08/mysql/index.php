<?php
$start = microtime();

// соединение с базой данных: тип БД(mysql) параметры БД(localhost или 127.0.0.1) и название БД;
// логин и пароль к БД
$request = 'mysql:host=localhost;dbname=test';
$request2 = 'mysql:host=localhost;dbname=iptest';
$dbh = new PDO($request, 'root', '');
$dbh2 = new PDO($request2, 'root', '');

// подготовка запроса
$sth = $dbh->prepare(
  'SELECT * FROM `guest`'
);


// исполнение запроса
$sth->execute();
// var_dump($sth);

// получение данных запроса
$data = $sth->fetchAll();
// var_dump($data);
echo '<br> time: ' . (microtime() - $start);
echo '<br>';

// подготовка запроса
$sth = $dbh->prepare(
  'SELECT * FROM `guest` WHERE age > :age'
  // 'SELECT * FROM `guest` WHERE age >25'
);

// исполнение запроса
$sth->execute([':age' => 37]);
// var_dump($sth);

// получение данных запроса
$data = $sth->fetchAll();
// var_dump($data);

echo '<br> time: ' . (microtime() - $start);
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
     <h1>Результат выборки</h1>
     <hr>
     <?php foreach ($data as $key => $value) { ?>
       <p>
         <?php echo $value['lastName'] . ' ' .$value['firstName']; ?>
         <!-- <?php var_dump($value); ?> -->
       </p>

    <?php }?>
   </body>
 </html>
