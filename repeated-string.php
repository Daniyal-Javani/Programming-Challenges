<?php
// https://www.hackerrank.com/challenges/repeated-string/problem

function repeatedString($s, $n) {
    $stringSize = strlen($s);
    $count = 0;
    $remainder = $n % $stringSize;
    for ($i = 0; $i < $stringSize; $i++) {
        if ($i == $remainder) {
            $result = $count;
        }

        if ($s[$i] == 'a') {
            $count++;
        }
    }

    $result += (int) ($n / $stringSize) * $count;

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

fscanf($stdin, "%ld\n", $n);

$result = repeatedString($s, $n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
