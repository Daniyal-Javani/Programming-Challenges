<?php
$sum = 1;
$div = 2;
$edge = 0;
for ($index = 2; $index <= 1001 * 1001; $index++) {
    if($index % $div == 1){
        $sum += $index;
        ++$edge;
        if($edge == 4){
            $edge = 0;
            $div +=2;
        }
    }
}
echo $sum;