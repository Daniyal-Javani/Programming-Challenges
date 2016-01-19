<?php
$times = microtime(true);

for ($i = 1; $i < 500; ++$i) {
    for ($j = $i + 1; $j  < 500; ++$j) {
        $k = sqrt(pow($i, 2) + pow($j, 2));
        if ( ctype_digit((string)$k)) {
            if ($i + $j + $k < 1000) {
                @++$p[$i + $j + $k ];
            }
        }
    }
}
echo microtime(true) - $times."\n";

$ans = array_keys($p, max($p));
echo $ans[0];