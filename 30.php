<?php
$ans = 0;
for ($index = 2; $index < 999999; $index++) {
    $index_array = strval($index);
    $sum = 0;
    for ($index1 = 0; $index1 < strlen($index_array); $index1++) {
        $sum += pow($index_array[$index1], 5);
    }
    if($sum == $index){
        $ans += $sum;
        echo $index."\n";
    }
}
    echo $ans;