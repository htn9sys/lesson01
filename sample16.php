<?php
$news = file_get_contents('data/news.txt');
echo $news;

// ファイルの追記
$news = $news . "<br>追加のニュースです";
$success = file_put_contents('data/news.txt', $news);

// readfile('data/news.txt') // 上記と同じようにファイルの読み込みができる
?>