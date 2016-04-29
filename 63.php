<?php
$times = microtime(true);
$counter = 0;
for ($j = 1; $j< 100;++$j) {
    for ($i = 1; $i< 100;++$i) {
        if (strlen(bcpow($j, $i)) == $i) {
            ++$counter;
        }
    }
}
echo $counter;
echo "\n";
echo microtime(true) - $times ."\n";