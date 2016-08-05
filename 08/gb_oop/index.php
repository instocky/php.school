<meta charset="utf-8">
<?php
// класс
class Guestbook {
  public $color;
  public $composition;
  public $record;

  public function UserGuest()
  {
    echo 'просто функция';
  }
}
$user1 = new Guestbook;
$user2 = new Guestbook;
$user3 = new Guestbook;
// var_dump($user1);
echo $user1->record = 'Хороший сайт ';
echo $user2->record = 'Можно еще... ';
echo $user3->record = 'Обязательно расскажу друзьям ';

$user1->UserGuest();
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
     <form class="" action="index.php" method="post">
       <textarea name="text" rows="8" cols="40"></textarea><br>
       <input type="submit" name="name" value="Отправить">
     </form>
   </body>
 </html>
