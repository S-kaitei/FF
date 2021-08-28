<?php

class Human
{
  // プロパティ
  const MAX_HP = 100; // 最大HPの定義 定数
  private $name; // 人間の名前
  private $hitPoint = 100; // 現在のHP
  private $attackPoint = 20; // 攻撃力

  // メソッド
  public function __construct($name, $hitPoint = 100, $attackPoint = 20)
  {
    $this->name = $name;
  }

  public function doAttack($enemies)
  {

    if ($this->hitPoint <= 0) {
      return false;
    }

    $enemyIndex = rand(0, count($enemies) - 1); // 添字は0から始まるので、-1する
    $enemy = $enemies[$enemyIndex];

    echo "『".$this->getName() ."』の攻撃！\n";
    echo "【". $enemy->getName() ."】に" . $this->attackPoint . " のダメージ！ \n";
    $enemy->tookDamage($this->attackPoint);
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

  public function recoveryDamage($heal, $target)
  {
    $this->hitPoint += $heal;
    if($this->hitPoint > $target::MAX_HP){
      $this->hitPoint = $target::MAX_HP;
    }
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
}