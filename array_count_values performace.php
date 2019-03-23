<?php
$ar = [];
for ($i = 0; $i < 10000000; $i++) {
	$ar[] = rand(0, 10);
}

$start = microtime(true);
foreach($ar as $val) {
    if (! isset($counter[$val])) {
        $counter[$val] = 1;
    } else {
        $counter[$val]++;
    }
}
var_dump($counter);
echo (microtime(true) - $start) . PHP_EOL;

$start = microtime(true);
$counter = array_count_values($ar);
var_dump($counter);
echo (microtime(true) - $start) . PHP_EOL;
