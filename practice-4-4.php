//4.
<?php
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
  if($a > $max_number){
     $max_number = $a;
  }
 }
 return $max_number;
}
$arr = array(1,3,9,7,5);
echo max_array($arr);
//echo max_array(array(1,3,9,7,5));