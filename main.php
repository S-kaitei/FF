<?php

// ファイルのロード
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
require_once('./classes/Brave.php');

// インスタンス化
$tidus = new Brave("ティーダ");
$goblin = new Enemy("ゴブリン");

$turn = 1;

// どちらかのHPが0になるまで繰り返す
while($tidus->getHitPoint() > 0 && $goblin->getHitPoint() > 0)
{
  echo "*** $turn ターン目 ***\n\n";

  // 現在のHPの表示
  echo $tidus->getName() . " : " . $tidus->getHitPoint() . "/" . $tidus::MAX_HP . "\n";
  echo $goblin->getName() . " : " . $goblin->getHitPoint() . "/" . $goblin::MAX_HP . "\n";
  echo "\n";

  // 攻撃
  $tidus->doAttack($goblin);
  echo "\n";
  $goblin->doAttack($tidus);
  echo "\n";

  $turn++;
}

echo "⭐️⭐️⭐️ 戦闘終了 ⭐️⭐️⭐️\n\n";
echo $tidus->getName() . " : " . $tidus->getHitPoint() . "/" . $tidus::MAX_HP . "\n";
echo $goblin->getName() . " : " . $goblin->getHitPoint() . "/" . $goblin::MAX_HP . "\n";


