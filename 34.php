<?php
$times2 = microtime(true);
$sum_all = 0;
for($i = 3;;++$i){
    $str_i = strval($i);
//    echo strval($i)."\n";
    $sum = 0;
    $break = false;
    for($j = 0; $j< strlen($str_i) ; ++$j){
        $sum += gmp_intval(gmp_fact($str_i[$j]));
        if($sum > $i){
            $break = true;
            break;
        }
    }
    if($break){
        continue;
    }
    if($sum == $i){
        $sum_all += $i;
        echo $sum_all." ans\n";
    }
}


echo microtime(true) - $times2."\n";
