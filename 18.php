<?php
$pyramid = "75
95 64
17 47 82
18 35 87 10
20 04 82 47 65
19 01 23 75 03 34
88 02 77 73 07 63 67
99 65 04 28 06 16 70 92
41 41 26 56 83 40 80 70 33
41 48 72 33 47 32 37 16 94 29
53 71 44 65 25 43 91 52 97 51 14
70 11 33 28 77 73 17 78 39 68 17 57
91 71 52 38 17 14 91 43 58 50 27 29 48
63 66 04 68 89 53 67 30 73 16 69 87 40 31
04 62 98 27 23 09 70 98 73 93 38 53 60 04 23";
$traiangle_pyramid = preg_split( '/[\n]/', $pyramid);
foreach ($traiangle_pyramid as $value) {
    $level[] = preg_split( '/[ ]/', $value);
}
$sum_max = 0;
for($i = 0 ; $i < pow(2, 14) ; $i++){
    $index = base_convert($i, 10, 2)."\n";
    $y = $x = $j = 0;
    $sum = $level[0][0];
    for( $k = 0 ; $k < 14 ; $k++){
        //Creating brute force table
        $strlen = strlen($index);
        if($k < 15 - $strlen){
            $index_re[$k] = 0;
        }
        else{
            $index_re[$k] = intval($index[$j]);
            $j++;
        }
        
        //Using of this table
        $y++;
        if($index_re[$k] == 1){
            $x++;
        }
        $sum += $level[$y][$x];
    }
    if($sum > $sum_max)
        $sum_max = $sum;
    unset($index_re);
}
echo $sum_max;