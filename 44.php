<?php
$times = microtime(true);

function pentagonal($num) {
     return $num * (3 * $num - 1 ) / 2;
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
        $pi = pentagonal($i);
        $pj = pentagonal($j);
        if (is_pentagonal($pi + $pj)) {
            if (is_pentagonal(abs($pi - $pj))) {
                $difference = $pi - $pj;
                break 2;
            }
        }
    }
}
echo $difference."\n";
echo microtime(true) - $times;