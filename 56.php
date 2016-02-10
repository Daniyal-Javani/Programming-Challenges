<?php
$times = microtime(true);
$max = 0;
function sum_numbers ($num) {
    return array_sum( array_map('intval', str_split($num)));
}
for ($j = 99; $j > 0; --$j) {
    for ($i = 99; $i > 0; --$i) {
        $sum = sum_numbers(gmp_strval(gmp_pow($j, $i)));
        if ($sum > $max) {
            $max = $sum;
        }
    }
}
echo microtime(true) - $times."\n";
echo $max;
