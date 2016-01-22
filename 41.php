<?php
$times = microtime(true);

function is_pandigital($num){
     $num = array_map('intval', str_split($num));
    if(array_search(0, $num) || array_search(8, $num) || array_search(9, $num)){
        return false;
    }
    if(count($num) == 7) {
        if(count(array_unique($num)) == 7) {
            return true;
        }
    }
    return false;
}

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

for ($i = 7654321 ; ; $i-=2) {
    if (is_pandigital($i)) {
        if (is_prime($i)) {
            echo $i."\n";
            break;
        }
    }
}

echo microtime(true) - $times."\n";