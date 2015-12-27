<?php
$times = microtime(true);
function is_unusual($num1, $num2, $num3) {
    $array  = array_map('intval', str_split($num1.$num2.$num3));
    if(array_search(0, $array)){
        return false;
    }
    if(count($array) == count( array_unique($array)) && count( array_unique($array)) == 9 ) {
        return true;
    }
    else{
        return false;
    }
}
function is_pandigital($num) {
    $array  = array_map('intval', str_split($num));
    if(count($array) == count(array_unique($array))) {
        return true;
    }
    else{
        return false;
    }
}
for($i = 1;$i < 2000 ; ++$i){
    if(is_pandigital($i)){
        for($j = $i + 1; $j < 2000; ++$j){
            if(is_unusual($i * $j,$i,$j)){
                $sums[] = $i * $j;
            }
        }
    }
}
$uniq_array = array_unique($sums);
echo array_sum($uniq_array)."\n";
echo microtime(true) - $times;