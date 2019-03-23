<?php
// https://www.hackerrank.com/challenges/sock-merchant/problem

function sockMerchant($n, $ar) {
    $counter = [];
    $result = 0;

    foreach($ar as $val) {
        if (! isset($counter[$val])) {
            $counter[$val] = 1;
        } else {
            $counter[$val]++;
        }
        if ($counter[$val] %2 == 0) {
            $result++;
        }
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
