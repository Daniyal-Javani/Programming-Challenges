<?php
// https://www.hackerrank.com/challenges/minimum-swaps-2/problem

function minimumSwaps($arr, $n) {
    $result = 0;
    $replaced = [];
    for ($i = 0; $i < $n; $i++) {
        $expectedValue = $i + 1;

        if (isset($replaced[$arr[$i]]) && $replaced[$arr[$i]]) {
            $value = $replaced[$arr[$i]];
            while (isset($replaced[$value])) {
                $value = $replaced[$value];
            }
        } else {
            $value = $arr[$i];
        }
    
        if ($value !== $expectedValue) {
            $replaced[$expectedValue] = $arr[$i];
            $arr[$i] = $expectedValue;
            $result++;
        }
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = minimumSwaps($arr, $n);

fwrite($fptr, $res . "\n");

fclose($stdin);
fclose($fptr);
