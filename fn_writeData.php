<?php

function writeData()
{
    $personal_name = $_POST['personal_name'];
    $contents = $_POST['contents'];
    $contents = nl2br($contents);

    $data = "<hr>\r\n";
    $data = $data."<p>投稿者:".$personal_name."</p>\r\n";
    $data = $data."<p>内容:</p>\r\n";
    $data = $data."<p>".$contents."</p>\r\n";

    $keijban_file = 'keijban.txt';

    $fp = fopen($keijban_file, 'ab');

    if ($fp) {
        if (flock($fp, LOCK_EX)) {
            if (fwrite($fp, $data) == false) {
                print('ファイルの書き込みに失敗しました');
            }

            flock($fp, LOCK_UN);
        } else {
            print('ファイルロックに失敗しました');
        }
    }
    fclose($fp);
}
