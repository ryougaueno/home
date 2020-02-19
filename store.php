<?php
// 読み込み
require_once('Models/Task.php');

// deta取得
$title = $_POST['view-title'];
$contents = $_POST['view-content'];
$currentTime = date("Y/m/d H:i:s");

// DBへ保存
$task = new Task();
// $task ->create([$title,$contents]);
$task->create([$title, $contents, $currentTime]);

// topへ
header('location:sample.php');
exit;