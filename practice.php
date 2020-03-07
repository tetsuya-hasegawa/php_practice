<?php
$a = 3;
$b = 7;
echo $a + $b;


$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];


$hello = "HELLO ";
$name = "TETSUYA";
$world = "'s world";
echo $hello.$name.$world;
echo '<br>';

$tech_boost = "tech";
echo  "「". $tech_boost. " boost」";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar_2018["December"];

$name = "hasegawa";
if ($name == "hasegawa"){
    echo "私は長谷川哲也です";
}else{
    echo "私は長谷川哲也ではありません";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("バナナ", "りんご", "キウイ", "いちご", "みかん");
foreach($fruits as $Value){
    echo $Value;
}


