<?php
$times = microtime(true);
function c($n, $r){
    return gmp_strval(gmp_div( gmp_fact($n) ,  gmp_mul( gmp_fact($r),  gmp_fact($n-$r) ) ) );
}
$num = 0;
for ($n = 10; $n <= 100; ++$n) {
    for ($r = 1; $r <= $n; ++$r) {
        if (strlen(c($n, $r)) > 6 ) {
            ++$num;
        }
    }
}
echo microtime(true) - $times."\n";
echo $num;
