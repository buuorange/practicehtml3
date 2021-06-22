<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>コメント欄</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p class="ti">掲示板</p>
        <div>
            <form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
                <input type="text" class="name-text" name="personal_name"><br><br>
                <textarea name="contents" rows="8" cols="40">
                </textarea><br><br>
                <input type="submit" class="btn" name="btn1" value="投稿する">
            </form>
            <?php
            require "fn_writeData.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                writeData();
            }
            ?>
        </div>
    </body>
</html>