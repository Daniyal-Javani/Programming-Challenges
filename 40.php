<?php
$times = microtime(true);

$n = 0;
$ans = 1;
for ($i = 0; $n <= 1000000; ++$i) {
    if ($i < 10) {
        ++$n;
    } else if ($i < 100) {
        $n += 2;
    } else if ($i < 1000) {
        $n += 3;
    }  else if ($i < 10000) {
        $n += 4;
    } else if ($i < 100000) {
        $n += 5;
    } else if ($i < 1000000) {
        $n += 6;
    }
    
    if ($n > 10 && $n < 13) {
         $current = array_map('intval', str_split($i));
         $ans *= $current[count($current) - ($n - 10)];
    } else if ($n > 100 && $n < 104) {
        $current = array_map('intval', str_split($i));
        $ans *= $current[count($current) - ($n - 100)];
    } else if ($n > 1000 && $n < 1005) {
        $current = array_map('intval', str_split($i));
        $ans *= $current[count($current) - ($n - 1000)];
    } else if ($n > 10000 && $n < 10006) {
        $current = array_map('intval', str_split($i));
        $ans *= $current[count($current) - ($n - 10000)];
    } else if ($n > 100000 && $n < 100007) {
        $current = array_map('intval', str_split($i));
        $ans *= $current[count($current) - ($n - 100000)];
    } else if ($n > 1000000 && $n < 1000008) {
        $current = array_map('intval', str_split($i));
        $ans *= $current[count($current) - ($n - 1000000)];
    }
}

echo microtime(true) - $times."\n";
echo $ans;