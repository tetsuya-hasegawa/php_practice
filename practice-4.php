
<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($AAA){
    return $AAA * 2;
}
echo sum(5);
echo "\n";


//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
 function f($a, $b){
     return $a + $b;
 }
echo f(1,3);
echo "\n";


//3.
function max_array($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    echo $result;
}
$arr = array(1,3,5,7,9);
max_array($arr);
echo "\n";
//max_array(array(1,3,5,7,9));
//echo "\n";


