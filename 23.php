<?php
function is_abundant($num){
    $sum = 1;
    for($i = 2 ; $i <= sqrt($num) ; $i++){
        if($num % $i == 0){
            if($i!=$num/$i){
                $sum += $i + $num/$i;
            }
            else{
                $sum+= $i;
            }
            if($sum > $num){
                return true;
            }
        }
    }
}
//init
for($j = 0 ;$j < 28124 ; $j++){
    if(is_abundant($j))
        $abundants[] = $j;
}
$answers = array_fill(0,28124+1,false);
$times = microtime(true);

for($i=0;$i< count($abundants);$i++){
    for($j=0;$j<=$i;$j++){
            $answers[$abundants[$i]+$abundants[$j]]=true;
    }
}
echo microtime(true) - $times."\n";
;
$sum = 0;
for($i = 0 ;$i < 28124 ; $i++){
    if(!$answers[$i])
        $sum+=$i;
}
echo $sum."\n";
