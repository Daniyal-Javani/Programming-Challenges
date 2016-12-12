<?php
$start = microtime(true);
for ($i=1035; ; $i++) { 
	$accept = true;
    for ($j=2; $j < 7; $j++) { 
        if (!same_array(check_list($i),check_list($i * $j))) {
        		$accept = false;
                break;
        }
    }
    if ($accept) {
    	break;
    }
}
echo $i."\n";
function check_list($num) {
	$check_list = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
	while ($num > 1) { 
		$check_list[$num % 10]++;
		$num /= 10;
	}
	return $check_list;
}
function same_array($num1, $num2) {
	for ($j=0; $j < 10; $j++) { 
		if ($num1[$j] !== $num2[$j]) {
			return false;
		}
	}
	return true;
}
echo "\n".(microtime(true) - $start);