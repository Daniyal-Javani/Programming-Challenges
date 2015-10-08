<?php
$times2 = microtime(true);
$ans = 2; //Beacuse 2 & 5
for($i = 3 ; $i < 1000000 ; $i += 2){
    if(check5_2_0($i)){
        if(is_prime($i)){
            check($i);
        }
    }
}
echo $ans."\n";
function check5_2_0($num){
    $array_num = array_map('intval', str_split($num));
    foreach ($array_num as $val){
        if($val%5 == 0 || $val%2 == 0){
            return FALSE;
        }
    }
    return TRUE;
}
function check($num){
    $org_num = $num;
    $ans_temp = 1;
    $c = strlen($num);
    for($i = $c ; $i > 1 ; --$i){
        $t = $num % 10;
        $num = intval($num / 10);
        $num += $t * pow(10,$c - 1);
        if($num < $org_num){
            return FALSE;
        }
        if(!is_prime($num)){
            return FALSE;
        }
        if($num != $org_num){
            ++$ans_temp;
        }
    }
    global $ans;
    $ans += $ans_temp;
    return true;
}
function is_prime($num){
    if($num % 2 == 0){
        return false;
    }
    if($num == 2){
        return true;
    }
    if( $num == 1){
        return false;
    }
    for($i = 3 ; $i <= sqrt($num) + 1 ; $i += 2 ){
        if( $num % $i == 0){
            return false;
        }
    }
    return true;
}

echo microtime(true) - $times2."\n";
