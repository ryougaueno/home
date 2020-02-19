<?php

require_once('function.php');
require_once('Models/Task.php');
$todo = new Task();
//  var_dump($todo);die;

 $tasks = $todo->getAll();
//  echo '<pre>';
// var_dump($tasks);die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>さんちゃんねるへようこそ</title>
    <link type="text/css" rel="stylesheet" href="main.css" >
    
</head>
<body>
    <!-- header -->
    <header>
        <div class=wrapper>
            <h1>さんちゃんねる</h1>
            <a href="top.html/top.php"></a>
        </div>
        <div class="create">
            <a href="edit.php"><img src="img/プラスマークアイコン 2.png" alt=""></a>
        </div>
    </header>

    <!-- main ここから-->
    <main>
       
            <!-- for each -->
            <?php foreach ($tasks as $task) : ?>
                <div class="contents-box">
                    <div class="content">
                        <h5 class="content-title">
                            <!-- ここにタイトルよびだし -->
                            <?= h($task["title"]); ?>
                        </h5>
                        <p class="content-text">
                            <!-- ここにテキスト呼び出し -->
                            <?= h($task["contents"]); ?>
                        </p>
                    </div>
                    <div class="delete">
                        <a href="edit2.php?id=<?= h($task['id']); ?>" class="text-success"><p>編集</p> </a>
                            <form  action="delete.php" method="post">
                                <input type="hidden" name="id" value="<?= h($task['id']);?>">
                                <button type="submit" class="button">削除</button>
                            </form>
                        </div>
                     </div>
                     <!-- comment -->
                     <div class="comment-content">
                        <form action="" method="post">
            
                            <div class="box1">
                                <p>＊名前</p>
                                <textarea class="name-box" type="text" id="name" name="name"></textarea>
                            </div>
                            <div class="box2">
                                <p>＊こめんと</p>
                                <textarea class="comment-box" type="text"id="comment" name="comment"></textarea>
                            </div>
                            <br>
                            <div class="comment-button">
                                <input type="hidden" name="id" >
                                <button type="submit" class="btn btn-primary">とうこう</button>
                            </div>
                        </form>
                     </div>
                <!-- ?>ここまでfor each -->
            <?php endforeach; ?>
    </main>
    <!-- footer -->
    <footer>
        <div class="footer-box">
                <p>copyright©Nexceed.All right reserved.</p>
        </div>
    </footer>
</body>
</html>