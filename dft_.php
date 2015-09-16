<?php
$pyramid = "1
2 3
4 5 6
7 8 9 0";
$traiangle_pyramid = preg_split( '/[\n]/', $pyramid);
foreach ($traiangle_pyramid as $value) {
    $level[] = preg_split( '/[ ]/', $value);
}
$i = $j = 0;
$visited = array();
$stack = array();
echo $level[$j][$i]."\n";
array_push($stack, $level[$j][$i]);
$visited[0][0] = true;
$max = 0;
$backed = false;
while (true){
    if($i == 2 && $j == 3){
        echo 'sd';
    }
    if( ! isset($visited[$j + 1][$i]) && isset($level[$j+1][$i]) ){
        //Left child is not visited and there is.
        for ($index = $j; $backed && $index < 4; ++$index) {
            unset($visited[$j]);
        }
        $backed = false;
        $pre_i = $i;
        $pre_j = $j;
        ++$j;
        $visited[$j][$i] = true;
        echo $level[$j][$i]."\n";
        array_push($stack, $level[$j][$i]);
    }
    else if( !isset ($level[$j + 1][$i]) ||
            ( isset($visited[$j+1][$i]) && isset ($visited[$j +1][$i + 1]) ) ){
        //There is not left child
        $pre_i2 = $i;
        $pre_j2 = $j;
        --$j;
        if( $i > 0 && $pre_i != $i ){
            --$i;
        }
        $pre_i = $pre_i2;
        $pre_j = $pre_j2;
        $backed = true;
        if(count($stack) == 4){
//            $sum = array_sum($stack);
//            if($sum > $max){
//                $max = $sum;
                print_r($stack);
//            }
        }
        array_pop($stack);
    }
    else if( isset($visited[$j][$i]) && isset($visited[$j + 1][$i]) ){
        $pre_i = $i;
        $pre_j = $j;
        ++$i;
        ++$j;
        for ($index = $j + 1; $backed && $index < 4; ++$index) {
            unset($visited[$index]);
        }
        $backed = false;
        echo $level[$j][$i]."\n";
        $visited[$j][$i] = true;
        array_push($stack, $level[$j][$i]);
    }
 else {
       break; 
    }
}
echo $max;