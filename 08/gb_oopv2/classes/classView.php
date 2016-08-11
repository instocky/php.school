<?php
/**
 *
 */
class View
{

  function __construct()
  {

  }

  public function assign($name, $value)
  {
    echo 'assign';
  }

  public function display($template)
  {
    echo 'display template';
  }

  public function render($template)
  {
    echo 'return template';
  }


}
