<?php

// 読み込み
require_once('dbconnect.php');
require_once('function.php');

// 受け取り
$id = $_POST['id'];

// DBから削除
$stmt = $dbh->prepare('DELETE FROM tasks WHERE id = ?');
$stmt->execute([$id]);

// re
header("location: sample.php");