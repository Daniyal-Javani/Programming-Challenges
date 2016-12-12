<?php
$start = microtime(true);
for ($i=1488; $i < 10000; $i++) { 
	if (is_prime($i)) {
		for ($j=$i + 1; $j < 10000; $j++) { 
			if (is_prime($j) && is_prime($i + 2 * ($j - $i))) {
				if (same_array(check_list($i), check_list($j))
					&& same_array(check_list($i), check_list($i + 2 * ($j - $i)))) {
					break 2;
				}
				
			}
		}
	}
}
echo $i.$j.($i + 2 * ($j - $i));
function is_prime($num) {
	if ($num % 2 == 0) {
		return false;
	}	
	for ($i=3; $i <= sqrt($num); $i+=2) { 
		if ($num % $i == 0) {
			return false;
		}
	}
	return true;
}
function same_array($num1, $num2) {
	for ($j=0; $j < 10; $j++) { 
		if ($num1[$j] !== $num2[$j]) {
			return false;
		}
	}
	return true;
}
function check_list($num) {
	$check_list = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
	while ($num > 1) { 
		$check_list[$num % 10]++;
		$num /= 10;
	}
	return $check_list;
}
echo "\n".(microtime(true) - $start);