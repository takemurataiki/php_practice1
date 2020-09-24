<?php

//課題1
function sum($max){
    $result = $max * 2;
    return $result;
}
echo sum(100);
echo "\n";

//課題2
function f($a, $b){
    return $a + $b;

 }
 $result = f(1, 2);
 echo $result;
 echo "\n";
 
//課題3
$arr = array(1,3,5,7,9);
function n($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo n($arr);
echo "\n";

//課題4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($max_number < $a){
        $max_number = $a;
    }
 }

 return $max_number;
 }
 echo max_array(array(1,10,100,1000));
 echo "\n";


//課題5
//strip_tags
$str = "aaa<br>bbb<br>";

echo $str;

echo strip_tags( $str );
echo "\n";

//array_push
$members=array("一郎","二郎","三郎");
array_push($members,"四郎","五郎");
print_r($members);

//array_marge
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array = array_merge($array1, $array2);
print_r($array);
echo "\n";

//time mktime
$time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  echo "\n";
  
//date 
echo date("Y/m/t") . "\n"; 
?>
    