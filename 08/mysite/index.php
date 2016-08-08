<?php

class Page {
  private $header = 'header_htmlcode'; // свойство класса эквивалент переменной
  private $footer = 'footer_htmlcode';
  private $article = 'article_htmlcode';

  public function getArticle()
  {
    return $this->article;
  }

    public function getPage()
  {
    $this->header = __DIR__ . '/template/header.tpl';
    $this->footer = __DIR__ . '/template/footer.tpl';
    $footer = file_get_contents($this->footer);
    $header = file_get_contents($this->header);
    return $header . $this->article . $footer;
  }
}

$firstpage = new Page();
echo $a = $firstpage->getPage();
?>
