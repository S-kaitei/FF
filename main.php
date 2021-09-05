<?php

// ファイルのロード
require_once('./lib/Loader.php');
require_once('./lib/Utility.php');

// オートロード
$loader = new Loader();
// classesフォルダの中身をロード対象ディレクトリとして登録
$loader->regDirectory(__DIR__ . '/classes');
$loader->register();

// インスタンス化
$members = array();
$members[] = new Brave("ティーダ");
$members[] = new WhiteMage("ユウナ");
$members[] = new BlackMage("ルールー");

$enemies = array();
$enemies[] = new Enemy("ゴブリン", 20);
$enemies[] = new Enemy("ボム", 25);
$enemies[] = new Enemy("モルボル", 30);

$turn = 1;
$isFinishFlg = false;

$messageObj = new Message;

// どちらかのHPが0になるまで繰り返す
while(!$isFinishFlg)
{
  echo "*** $turn ターン目 ***\n\n";

  // 仲間の表示
  $messageObj->displayStatusMessage($members);

  // 敵の表示
  $messageObj->displayStatusMessage($enemies);

  // 仲間の攻撃
  $messageObj->displayAttackMessage($members,$enemies);

  // 敵の攻撃
  $messageObj->displayAttackMessage($enemies, $members);

  // 仲間の全滅チェック
  $isFinishFlg = isFinish($members);
  if($isFinishFlg){
    $message = "GAME OVER ....\n\n";
    break;
  }

  $isFinishFlg = isFinish($enemies);
  if($isFinishFlg){
    $message = "♪♪♪ファンファーレ♪♪♪\n\n";
    break;
  }

  $turn++;
}

echo "⭐️⭐️⭐️ 戦闘終了 ⭐️⭐️⭐️\n\n";

echo $message;

// 仲間の表示
$messageObj->displayStatusMessage($members);

// 敵の表示
$messageObj->displayStatusMessage($enemies);


