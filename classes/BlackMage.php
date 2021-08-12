<?php

class BlackMage extends Human
{
  // プロパティ
  const MAX_HP = 80;
  private $hitPoint = 80;
  private $attackPoint = 10;
  private $intelligence = 30;

  public function doAttack($enemy)
  {
    if(rand(1, 2) === 1){
      echo "『" . $this->getName() . "』のスキルが発動した！\n";
      echo "『ファイア』！！\n";
      echo $enemy->getName() . "に" . $this->intelligence * 1.5 . "のダメージ！\n";
      $enemy->tookDamage($this->intelligence * 1.5);
    }else{
      parent::doAttack($enemy);
    }
    return true;
  }
}