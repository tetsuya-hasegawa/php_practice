<?php
//5.課題-strip_tags
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除きます！</p>";
echo strip_tags($str) ."\n";
?>
echo "\n";

<?php
//5.課題-rray_push
$fruits = ['apple', 'orange', 'melon'];
 
//array_pushを使用して要素を追加する
array_push($fruits, 'banana', 'pineapple');
 
print_r($fruits);
echo "\n";


//5.課題-array_merge
//配列を作成
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
//配列を結合する
$array = array_merge($array1, $array2, $array3);
 
print_r($array);
echo "\n";

//5.課題-time, mktime

//5.課題-date