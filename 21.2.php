<?php
$time = time();
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
$sum = 0;
for($i = 0 ; $i <= 10000 ; $i++){
    $di = d($i);
    if(d($di) == $i && $di != $i){
        $sum += $di;
    } 
}
echo $sum."\n";
echo "run time is ".(time() - $time);

//14s