<?php
// 読み込み
require_once('Models/Task.php');

// deta取得
$id = $_POST['id'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$currentTime = date("Y/m/d H:i:s");

// DBへ保存
$task = new Comment();
// var_dump($_POST['name']);die;
$task->create([$id,$name, $comment, $currentTime]);

// topへ
header('location:sample.php');
exit;