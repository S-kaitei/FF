<?php

class Enemy
{
  const MAX_HP = 50; //最大HPの定義 定数
  private $name; //敵の名前
  private $hitPoint = 50; // 現在のHP
  private $attackPoint = 10; // 攻撃力

  // メソッド
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getHitPoint()
  {
    return $this->hitPoint;
  }

  public function getAttackPoint()
  {
    return $this->attackPoint;
  }

  public function doAttack($human)
  {
    echo "『". $this->getName() ."』の攻撃！ \n";
    echo "【" . $human->getName() . "】に" . $this->attackPoint . "のダメージ！ \n";
    $human->tookDamage($this->attackPoint);
  }

  public function tookDamage($damage)
  {
    $this->hitPoint -= $damage;
    // HPが0未満にならないための処理
    if($this->hitPoint < 0)
    {
      $this->hitPoint = 0;
    }
  }
}