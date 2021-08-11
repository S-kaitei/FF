<?php

// ファイルのロード
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');

// インスタンス化
$tidus = new Human();
$goblin = new Enemy();

$tidus->name = "ティーダ";
$goblin->name = "ゴブリン";

echo $tidus->name . "\n";
echo $goblin->name . "\n";
