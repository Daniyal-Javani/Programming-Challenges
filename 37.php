<?php
$times = microtime(true);
function is_prime($num){
    if($num == 2){
        return true;
    }
    if($num % 2 == 0){
        return false;
    }
    if( $num == 1){
        return false;
    }
    for($i = 3 ; $i <= sqrt($num) + 1 ; $i += 2 ){
        if( $num % $i == 0){
            return false;
        }
    }
    return true;
}
$sum = 0;
for ($i = 23, $j = 0; $j < 11  ; $i += 2) {
     $temp1 = $temp2 = $i;
    $div = pow(10, strlen($temp2) - 1) ;
    while ((int)$temp1 > 10) {
        $temp1 = intval($temp1 / 10);
        $temp2 = $temp2 % $div;
        $div /= 10;
        if (! (is_prime($temp1) && is_prime($temp2))) {
            continue 2;
        }
    }
    if (! is_prime($i)) {
        continue;
    }
    $sum += $i;
    ++$j;
}
echo microtime(true) - $times."\n";
echo $sum;