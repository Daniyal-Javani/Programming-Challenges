<?php
$times = microtime(true);

echo (bcpowmod(2, 7830457, 10000000000)*28433+1)%10000000000 ."\n";

echo microtime(true) - $times;