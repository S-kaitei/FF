<?php

class Enemy extends Lives
{
  const MAX_HP = 50; //最大HPの定義 定数

  // メソッド
  public function __construct($name, $attackPoint)
  {
    $hitPoint = 50;
    $intelligence = 0;
    parent::__construct($name,$hitPoint,$attackPoint,$intelligence);
  }
}