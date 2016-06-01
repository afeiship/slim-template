<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/27
 * Time: 15:25
 */

namespace fei;


class XSmarty
{
  public static function display($inTemplate, $inData)
  {
    $view = new TemplateCore();
    foreach ($inData as $key => $value) {
      $view->$key = $value;
    }
    return $view->render($inTemplate);
  }
}
