<?php

// ファイルの読み込み
require_once('Models/Task.php');

// データの受け取り
$title = $_POST['view-title'];
$contents = $_POST['view-content'];
$id = $_POST['id'];

// DBへのデータ保存
$task = new Task();
$task->update([$title, $contents, $id]);

// リダイレクト
header('location:sample.php');
exit;
