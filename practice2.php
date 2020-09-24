<?php 
//課題1
$name = "takmeurataiki";
if ($name = "takemurataiki") {
    echo "私は あなたの名前 です";
} else {
    echo "あなたの名前ではありません。";
}

//課題2
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;


//課題3
$furits = array("apple","orange","lemmonn","banana");
foreach($furits as $furit){
    echo $furit;
}

//課題4
$start = 1;
$end = 100;
for($i = $start;$i <= $end; $i++){
    if($i % 5 == 0){
    echo $i;
    }
}

