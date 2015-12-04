<?php
$max_rec_number = 0;
$ans = 0;
for ($index = 3; $index < 1000; ++$index) {
    $temp = array_map("intval", array_slice(str_split(rtrim( bcdiv(1,$index,4000),0)), 2));
    for($i = 1 ; $i < count($temp) ; ++$i){
        for($j = $i - 1  ; $j >= 0 ; --$j){
            if($temp[$i] == $temp[$j]){
                $not_recur = true;
                for($k = $j,$l = $i,$m = $i + ($i - $j) ,$n = $m + ($i - $j);
                $k < $i ; ++$k,++$l,++$m,++$n){
                    if( $n >= count($temp) 
                            || ($temp[$k] != $temp[$l]) || ($temp[$l] != $temp[$m]) 
                            || ($temp[$m] != $temp[$n]) ){
                        $not_recur = false;
                        break;
                    }      
                }
                if( $not_recur == true){
                    if(($i - $j) > $max_rec_number){
                        $max_rec_number = ($i - $j);
                        $ans = $index;
                    }
                    break 2;
                }
                
           }
        }
    }
}
echo $ans;