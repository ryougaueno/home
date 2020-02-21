<?php

// ファイルの読み込み
require_once('Models/Task.php');

// データの受け取り
$id = $_POST['id'];

// DBからデータの削除
$task = new Comment();
$task->delete([$id]);

// リダイレクト・
header("location: sample.php");
exit;

