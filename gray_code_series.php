<?php
function bin2gray($value = '')
{
    $result = $value[0];
    for ($i = 1; $i < strlen($value); $i++) {
        $result .= (string) (int) ($value[$i - 1] xor $value[$i]);
    }
    return $result;
}

$n = 65;
$base = 0;
for ($i = 0; $i < $n; $i++) {
    $base += pow(2, $i);
}

$base -= $n;
for ($i = 0; $i < $n; $i++) {
    ++$base;
    echo bin2gray(decbin($base)) . "\n";
}
