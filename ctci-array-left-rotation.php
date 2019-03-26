<?php
// https://www.hackerrank.com/challenges/ctci-array-left-rotation/problem

function rotLeft($a, $d, $n) {
    $result = [];

    $i = $d;
    do {
        $result[] = $a[$i];
        $i++;
        if ($i == $n) {
            $i = 0;
        }
    } while ($i !== $d);

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nd_temp);
$nd = explode(' ', $nd_temp);

$n = intval($nd[0]);

$d = intval($nd[1]);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = rotLeft($a, $d, $n);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
