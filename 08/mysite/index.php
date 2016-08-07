<meta charset="utf-8">
<?php
// include __DIR__ . '/config/db.txt';
// $arr = file(__DIR__ . '/config/db.txt');
$header = file_get_contents(__DIR__ . '/template/header.tpl');
$footer = file_get_contents(__DIR__ . '/template/footer.tpl');

class Page {
  public $header; // свойство класса эквивалент переменной
  public $footer;
  public $article = 'article';
  public $color = 'red';

  public function getArticle()
  {
    return $this->article;
  }

  public function changeColor($newcolor)
  {
    return $this->color = $newcolor;
  }
}

$firstpage = new Page();
$firstpage->article = 'new article';
echo $firstpage->header = $header;
echo $firstpage->color;
echo $firstpage->changeColor(white);
echo $firstpage->getArticle();
echo $firstpage->footer = $footer;
?>
