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

  // 名前を取得するメソッド（ゲッター）
  public function getName()
  {
    return $this->name;
  }

  // 現在HPを取得するメソッド(ゲッター)
  public function getHitPoint()
  {
    $result = $this->hitPoint;
    if($result < 0){
      $result = 0;
    }
    return $result;
  }

  // 現在HPを設定するメソッド(セッター)
  public function tookDamage($damage)
  {
    $this->hitPoint -= $damage;
    // HPが0未満にならないための処理
    if($this->hitPoint < 0){
      $this->hitPoint = 0;
    }
  }

  // 現在HPを設定するメソッド（セッター）
  public function recoveryDamage($heal, $target)
  {
    $this->hitPoint += $heal;
    // 最大値を超えて回復しない
    if($this->hitPoint > $target::MAX_HP){
      $this->hitPoint = $target::MAX_HP;
    }
  }
}