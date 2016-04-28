<?php
$times = microtime(true);

function swap(&$x,&$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}

$constrains = array(319, 680, 180, 690, 129, 620, 762, 689, 762, 318, 368, 710, 720, 710, 629, 168, 160, 689, 716, 731, 736, 729, 316, 729, 729, 710, 769, 290, 719, 680, 318, 389, 162, 289, 162, 718, 729, 319, 790, 680, 890, 362, 319, 760, 316, 729, 380, 319, 728, 716, );
$ans = [0, 1, 2, 3, 6, 7, 8, 9];
$arr = array();
foreach ($constrains as $constrain) {
    $constrain = array_map('intval', str_split($constrain));
    $arr[] = $constrain[0].$constrain[1];
    $arr[] = $constrain[0].$constrain[2];
    $arr[] = $constrain[1].$constrain[2];
}
while (true){
    $complete_flag = true;
    foreach ($arr as $val) {
            $a = array_search(intval($val[0]), $ans);
            $b = array_search(intval($val[1]), $ans);
            if ($b < $a) {
                swap($ans[$b], $ans[$a]);
                $complete_flag = false;
            }
    }
    if ($complete_flag == true) {
        break;
    }
}
for ($index = 0; $index < count($ans); $index++) {
    echo $ans[$index];
}
echo "\n";
echo microtime(true) - $times ."\n";