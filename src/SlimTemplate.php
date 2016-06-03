<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/27
 * Time: 15:25
 */

namespace nx\module;


class SlimTemplate extends Template
{
  public static function display($inTemplate, $inData)
  {
    $view = new Template();
    foreach ($inData as $key => $value) {
      $view->$key = $value;
    }
    return $view->render($inTemplate);
  }
}
