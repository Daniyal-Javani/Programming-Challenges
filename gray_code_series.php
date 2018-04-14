<?php
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
function bin2gray($value = '')
{
    $result = $value[0];
    for ($i = 1; $i < strlen($value); $i++) {
        $result .= (string) (int) ($value[$i - 1] xor $value[$i]);
    }
    return $result;
}
function mydecbin($strdec)
{
    bcscale(0);

    $strbin = '';
    do {
        $strbin = bcmod($strdec, '2') . $strbin;
        $strdec = bcdiv($strdec, '2');
    } while (bccomp($strdec, '0'));

    return ($strbin);
}
$handle = fopen("php://stdin", "r");
$n = fgets($handle);
$n = trim($n);
$base = 0;
for ($i = 0; $i < $n; $i++) {
    $base = bcadd($base, bcpow(2, $i));
}

$base = bcsub($base, $n);
for ($i = 0; $i < $n; $i++) {
    $base = bcadd($base, 1);
    echo bin2gray(mydecbin("$base")) . "\n";
}
