<?php
$times2 = microtime(true);
$max = 0;

for ($i = -1000; $i < 1000; ++$i) {
    for ($j = -1000; $j < 1000; ++$j) {
        $t = find_max_prime($i, $j);
        if($t > $max){
            $max = $t;
            $max_product = $i * $j;
        }
    }
}

echo $max_product."\n";
echo microtime(true) - $times2."\n";

function find_max_prime($a, $b){
    $i = 0;
    while(true){
        $num = pow($i, 2) + $a * $i + $b;
        if($num < 2){
            return false;
        }
        if(is_prime($num)){
            ++$i;
        }
        else{
            return $i;
        }
    }
}

function is_prime($num){
    if($num % 2 == 0){
        return false;
    }
    if($num == 2){
        return true;
    }
    if( $num == 1){
        return false;
    }
    for($i = 3 ; $i <= sqrt($num) + 1 ; $i += 2 ){
        if( $num % $i == 0)
            return false;
    }
    return true;
}