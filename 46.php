<?php
function is_prime($num){
    for($i = 3 ; $i <= sqrt($num) + 1 ; $i += 2 ){
        if( $num % $i == 0){
            return false;
        }
    }
    return true;
}

for ($i = 9; ; $i+=2) {
    if ( ! is_prime($i) ) {
        for ($j = 1; ; ++$j) {
            if (2 * pow($j, 2) > $i) {
                break;
            }
            if (is_prime($i - 2 * pow($j, 2))) {
                continue 2;
            }
        }
        echo $i;
        die();
    }
}