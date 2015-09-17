<?php
$times2 = microtime(true);
function is_palindrome($num){
    $strnum = strval($num);
    for($i = 0 ; $i < strlen($strnum) ; ++$i){
        if($strnum[$i] != $strnum[strlen($strnum) - $i - 1]){
            return false;
        }
    }
    $strnumbi = base_convert($num,10,2);
    for($i = 0 ; $i < strlen($strnumbi) ; ++$i){
        if($strnumbi[$i] != $strnumbi[strlen($strnumbi) - $i - 1]){
            return false;
        }
    }
    return true;
}
$sum = 0;
for($i = 0 ; $i < 1000000 ; ++$i){
    if(is_palindrome($i)){
        $sum += $i;
    }
}
echo $sum."\n";
echo microtime(true) - $times2."\n";
