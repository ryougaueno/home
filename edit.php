<?php



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
    <form action="store.php" method="post">
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
            <input class="button1" type="submit" value="投稿">
    </form>
    
</body>
</html>