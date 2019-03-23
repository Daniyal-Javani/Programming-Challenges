<?php
// https://www.hackerrank.com/challenges/counting-valleys/problem

function countingValleys($n, $s) {
    $altitude = 0;
    $result = 0;

    for ($i = 0; $i < $n; $i++) {
        if ($s[$i] == 'D') {
            $altitude--;
        } else if ($s[$i] == 'U') {
            $altitude++;

            if ($altitude == 0) {
                ++$result;
            }
        }
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = countingValleys($n, $s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
