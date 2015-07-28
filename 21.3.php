<?php
$time = time();
function d ($num){
    $sum = 0;
    for($i = 2 ; $i <= sqrt($num) ; $i++){
        if($num % $i == 0){
            $sum += $i + $num/$i;
//            echo $i."\n";
        }
    }
    $sum += 1;
    return $sum;
//    echo $sum;
}
$sum = 0;
for($i = 2 ; $i < 10000 ; $i++){
    $j = d($i);
    if($j < $i){
        if(d($j) == $i){
            $sum += $i + $j;
            echo $i." ".$j."\n";
        }
    }
}
echo $sum."\n";
echo "run time is ".(time() - $time);