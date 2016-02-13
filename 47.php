<?php
$times = microtime(true);
function is_prime($num){
    for ($i = 3 ; $i <= sqrt($num) + 1 ; $i += 2 ) {
        if ( $num % $i == 0){
            return false;
        }
    }
    return true;
}

$prime = [2];
for ($i = 3; $i < 250000; $i += 2) {
    if (is_prime($i)) {
        $prime[] = $i;
    }
}

$n = 4;
$privious_is = 0;
$number_of_privious = 0;
for ($i = 1000; $i < 500000; ++$i) {
    if ($i % 2 != 0 && is_prime($i)) {
        $privious_is = 0;
        continue;
    }
    $number_of_distinct_prime = 0;
    $i_temp = $i;
    for ($j = 0; $i_temp != 1; ++$j) {
        if ($i_temp % $prime[$j] == 0) {
            ++$number_of_distinct_prime;
            while ($i_temp % $prime[$j] == 0) {
                $i_temp  /= $prime[$j];
            }
        }
    }
    if ($number_of_distinct_prime == $n) {
        if ($privious_is == $n) {
            echo --$i;
            break;
        } else {
            ++$privious_is;
            if ($privious_is == $n) {
                echo ($i - $n + 1)."\n";
                break;
            }
        }
    } else {
        $privious_is = 0;
    }
}
echo microtime(true) - $times;