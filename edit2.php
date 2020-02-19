<?php
      // ファイルの読み込み
      require_once('Models/Task.php');
      require_once('function.php');
  
      // データの受け取り
      $id = $_GET['id'];
  
      // DBへのデータ保存
      $task = (new Task())->get($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit.php</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/edit.css">

</head>
<body>
    <form action="update.php" method="post">
        <h1>タイトル</h1>
        <div class="box1">
            <div class="title-box1">title</div>
            <input class="title-box2" type="text" id="title" name="view-title">
        </div>
        <div class="box2">
            <div class="content-box1">content</div>
            <input class="content-box2" type="text"id="content" name="view-content">
        </div>
        <br>
        <div class="button">
            <input type="hidden" name="id" value="<?= h($task['id']); ?>">
            <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
    
</body>
</html>