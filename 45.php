<?php
$times = microtime(true);

function t ($n) {
    return $n * ($n + 1) / 2;
}

function p ($n) {
    return $n * (3 *$n - 1) / 2;
}

function h ($n) {
    return $n * (2 * $n - 1);
}

$j = 166;
$k = 144;

for ($i = 286; ; ++$i) {
    $t = t($i);
    for (;p($j) < $t;++$j);
    for (;h($k) < $t;++$k);
    
    if (p($j) == h($k) && h($k) == $t){
        echo $t."\n";
        break;
    }
}

echo microtime(true) - $times."\n";