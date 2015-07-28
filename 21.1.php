<?php
function d ($num){
    $sum = 0;
    for($i = 2 ; $i <= $num/2 ; $i++){
        if($num % $i == 0){
            $sum += $i;
//            echo $i."\n";
        }
    }
    $sum += 1;
    return $sum;
//    echo $sum;
}
$divSum = array();
for($i = 0 ; $i <= 10000 ; $i++){
    $divSum[$i] = d($i);
}
$sum = 0;
for($i = 0 ; $i <= 10000 ; $i++){
    if($divSum[$i] <= 10000){
        if($divSum[ $divSum[$i]] == $i && $divSum[$i] != $i){
//            echo $divSum[$i]."\n";
            $sum += $divSum[$i];
        }    
    }
}
echo $sum;
//8s