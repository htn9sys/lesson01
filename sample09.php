<?php
date_default_timezone_set('Asia/Tokyo');

$hello = 'こんにちは';
echo '$hello<br>'; //シングルクォーテーションの場合
echo "$hello<br>"; //ダブルクォーテーションの場合
echo $hello . '<br>'; // 通常の文字列連結
echo '1+1<br>'; //数字では使えない事の一例
echo "1+1<br>"; //数字では使えない事の一例
echo 1+1 . '<br>'; //数字では使えない事の一例

for($i=0; $i<366; $i++):
  $time = strtotime("+$i day");
  $day = date('n/j(D)', $time);
  echo $day . '<br>';
endfor;
?>