<?php
$base = 0;
for ($index = 1; $index < 1000; $index++) {
    $base = bcadd($base, bcpow($index, $index));
}
echo substr( strval($base), strlen(strval($base))-10);