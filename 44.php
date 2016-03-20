<?php
$times = microtime(true);

for ($i = 1; $i < 2200; ++$i) {
    $pentagonal[$i] = $i * (3 * $i - 1 ) / 2;
}

function is_pentagonal($c) {
    $x = (1+sqrt(1+24*$c))/(6);
    if ($x == (int)$x) {
        return true;
    } else {
        return false;
    }
}

for ($i = 2;  ; ++$i) {
    for ($j = 1; $j < $i ; ++$j) {
        if (is_pentagonal($pentagonal[$i] + $pentagonal[$j])) {
            if (is_pentagonal(abs($pentagonal[$i]- $pentagonal[$j]))) {
                $difference = $pentagonal[$i] - $pentagonal[$j];
                break 2;
            }
        }
    }
}
echo $difference."\n";
echo microtime(true) - $times;