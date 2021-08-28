<?php

class Lives
{
  // プロパティ
  private $name;
  private $hitPoint;
  private $attackPoint; // 攻撃力
  private $intelligence; // 魔法攻撃力

  // メソッド
  public function __construct($name, $hitPoint = 50, $attackPoint = 10, $intelligence = 0)
  {
      $this->name = $name;
      $this->hitPoint = $hitPoint;
      $this->attackPoint = $attackPoint;
      $this->intelligence = $intelligence;
  }
}