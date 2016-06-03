<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/27
 * Time: 15:25
 */

namespace nx\module;


class Template
{
  private $data = array();

  public function __get($inName)
  {
    return $this->data[$inName];
  }

  public function __set($inName, $inValue)
  {
    $this->data[$inName] = $inValue;
  }

  public function render($inTemplate)
  {
    extract($this->data);
    ob_start();
    echo $inTemplate;
    include($inTemplate);
    return ob_get_clean();
  }
}
