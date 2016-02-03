<?php
$times = microtime(true);
function is_prime($num){
    for($i = 3 ; $i <= sqrt($num) + 1 ; $i += 2 ){
        if( $num % $i == 0){
            return false;
        }
    }
    return true;
}

$ans = 0;
$longest = 0;
$first = true;
for ($i = 3; $i < 10; $i += 2) {
    if ($first) {
        $sum = 2;
        $long = 1;
        $first = false;
    } else {
        $sum = 0;
        $long = 0;
    }
    for ($j = $i; ; $j += 2) {
        if (is_prime($j)) {
            if ( $sum + $j > 1000000) {
                break;
            }
            ++$long;
            $sum += $j;
            if (is_prime($sum)) {
                if ($long > $longest) {
                    $longest = $long;
                    $ans = $sum;
                }
           }
        }
    }
}
echo microtime(true) - $times."\n";
echo $ans.' '.$longest;