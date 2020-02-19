<?php
require_once('function.php');
require_once('Models/Task.php');
$todo = new Task();
//  var_dump($todo);die;

 $tasks = $todo->getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="main.css" >
    
</head>
<body>
    <!-- header -->
    <header>
        <div class=wrapper>
            <h1>タイトル</h1>
        </div>
        <div class="create">
            <a href="edit.php"><img src="img/プラスマークアイコン 2.png" alt=""></a>
        </div>
    </header>

    <!-- main ここから-->
    <main>
        <div class="contents-box">
            <!-- for each -->
            <?php foreach ($tasks as $task) : ?>
                <div class="content">
                    <h5 class="content-title">
                        <!-- ここにタイトルよびだし -->
                        <?= h($task["view-title"]); ?>
                    </h5>
                    <p class="content-text">
                        <!-- ここにテキスト呼び出し -->
                        <?= h($task["view-content"]); ?>
                    </p>
                </div>
                <!-- ?>ここまでfor each -->
            <?php endforeach; ?>
        </div>

    </main>

</body>
</html>