<?php
$times = microtime(true);
function is_pandigital($num){
    if(array_search(0, $num)){
        return false;
    }
    if(count($num) == 9) {
        if(count(array_unique($num)) == 9) {
            return true;
        }
    }
    return false;
}

$max = 0;

for ($n = 9; $n < 9999 ;++$n) {
    $count = 0;
    $p = '';
    for ($i = 1; strlen($p) < 9; ++$i) {
        $p .= $i * $n;
        if (strlen($p) == 9) {
            if (is_pandigital(array_map('intval', str_split($p)))) {
                if ($p > $max) {
                    $max = $p;
                }
            }
        }
    }
}

echo microtime(true) - $times."\n";
echo $max;