<?php

// ファイルのロード
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');

// インスタンス化
$tidus = new Human();
$goblin = new Enemy();

$tidus->name = "ティーダ";
$goblin->name = "ゴブリン";

// どちらかのHPが0になるまで繰り返す
while($tidus->hitPoint > 0 && $goblin->hitPoint > 0)
{
  // 現在のHPの表示
  echo $tidus->name . " : " . $tidus->hitPoint . "/" . $tidus::MAX_HP . "\n";
  echo $goblin->name . " : " . $goblin->hitPoint . "/" . $goblin::MAX_HP . "\n";
  echo "\n";

  // 攻撃
  $tidus->doAttack($goblin);
  echo "\n";
  $goblin->doAttack($tidus);
  echo "\n";
}

echo "⭐️⭐️⭐️ 戦闘終了 ⭐️⭐️⭐️\n\n";
echo $tidus->name . " : " . $tidus->hitPoint . "/" . $tidus::MAX_HP . "\n";
echo $goblin->name . " : " . $goblin->hitPoint . "/" . $goblin::MAX_HP . "\n";


