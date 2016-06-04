<?php
$times = microtime(true);
$counter = 0;
$nums = array();
for ($i = 1; $i< 10000000;++$i) {
    $array_num = array_map('intval', str_split($i));
    while (true) {
        $temp = 0;
        foreach ($array_num as $digit) {
            $temp += $digit * $digit;
        }
        $temp_array[] = $temp;
        if (isset($nums[$temp])) {
            if (!$nums[$temp]) { //false
                foreach ($temp_array as $num) {
                  $nums[$num] = false;
               }
                $temp_array = [];
                break;
            } else if ($nums[$temp]) { //true
                foreach ($temp_array as $num) {
                    $nums[$num] = true;
                }
                $temp_array = [];
                ++$counter;
                break;
            }
        } else if ($temp == 1) {
            foreach ($temp_array as $num) {
                $nums[$num] = false;
            }
            $temp_array = [];
            break;
        } else if ($temp == 89 ) {
              foreach ($temp_array as $num) {
                $nums[$num] = true;
            }
            $temp_array = [];
            ++$counter;
            break;
        }
        $array_num  = array_map('intval', str_split($temp));
    }
}
echo $counter;
echo "\n";
echo microtime(true) - $times ."\n";