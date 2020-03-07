/* PHP/Laravel 03の課題 /

<?php
$name = "hasegawa";
if ($name == "hasegawa"){
    echo "私は長谷川哲也です";
}else{
    echo "私は長谷川哲也ではありません";
}
echo "\n";

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("バナナ ", "りんご ", "キウイ ", "いちご ", "みかん ");
foreach($fruits as $Value){
    echo $Value;
}
echo "\n";






/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}