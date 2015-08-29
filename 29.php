<?php
$array = array();
for ($index = 2; $index <= 100; $index++) {
    for ($index1 = 2; $index1 <= 100; $index1++) {
        $array[] = bcpow($index, $index1);
    }
}
$array = array_unique($array);
//print_r($array);
echo count($array);
