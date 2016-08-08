<?php
include __DIR__ . '/classUploud.php';

$file = new Uploader();
if($file->upLoad($file->isUploaded()) == true) {
  echo "Файл <b>$file->namefile</b> загружен";
};
// echo $file->name;
 ?>

 <form action="upload.php" method="post" enctype="multipart/form-data" style="margin: 50px;">
   <input type="file" name="nameform" value="file">
   <input type="submit" name="name" value="Отправить">
 </form>
