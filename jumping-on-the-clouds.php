<?php
// https://www.hackerrank.com/challenges/jumping-on-the-clouds/problem

function jumpingOnClouds($n, $c) {
    $i = 0;
    $result = 0;

    while ($i + 1 < $n) {
        if ($c[$i + 2] === 0) {
            $i += 2;
        } else {
            $i += 1;
        }

        $result += 1;
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($n, $c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
