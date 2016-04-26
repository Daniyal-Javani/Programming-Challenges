<?php
$times = microtime(true);

function is_palindrome($num){
    if ($num == strrev($num)) {
        return true;
    }
    else {
        return false;
    }
}
$lychrel = array();
function is_lychrel($num) {
    global $lychrel;
    for ($i = 1; $i< 50; ++$i) {
        $num = $num + strrev($num);
//        if (in_array($num, $lychrel)) {
//             return false;
//         }
        if (is_palindrome($num)) {
//            $lychrel[] = $num;
            return false;
        }
    }
    return true;
}

$count = 0;
for ($i = 10; $i < 10000; ++$i) {
    if (is_lychrel($i)) {
        ++$count;
    }
}
echo $count."\n";

echo microtime(true) - $times;