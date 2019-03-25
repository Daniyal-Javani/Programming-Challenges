<?php
// https://www.hackerrank.com/challenges/repeated-string/problem

function repeatedString($s, $n) {
    $stringSize = strlen($s);
    $arrayCount = [];
    $count = 0;
    for ($i = 0; $i < $stringSize; $i++) {
        if ($s[$i] == 'a') {
            $count++;
        }

        $arrayCount[$i] = $count;
    }

    $result = (int) ($n / $stringSize) * $count;
    if ($n % $stringSize !== 0) {
        $result += $arrayCount[($n % $stringSize) - 1];
    }

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
