<?php
$ans = [1, 1];
for ($i=10; $i < 100; $i++) { 
	$i_array = [];
	$i_array[0] = intval($i / 10);
	$i_array[1] = $i %10;
	if ($i % 10 == 0) {
		continue;
	}
	for ($j=$i + 1; $j < 100; $j++) { 
		if ($j % 10 == 0) {
			continue;
		}
		$j_array[0] = intval($j / 10);
		$j_array[1] = $j %10;
		if ($i_array[0] == $j_array[0]) {
		 	if ($j_array[1] == 0) {
		 		continue;
		 	}
			 if (($i_array[1] / $j_array[1] == $i / $j)) {
				$ans[0] *= $i;
				$ans[1] *= $j;		
			}
		}
		if ($i_array[1] == $j_array[1]) {
			if ($j_array[0] == 0) {
		 		continue;
		 	}
			 if (($i_array[0] / $j_array[0] == $i / $j)) {
				$ans[0] *= $i;
				$ans[1] *= $j;		
			}
		}
		if ($i_array[1] == $j_array[0]) {
		 	if ($j_array[1] == 0) {
		 		continue;
		 	}
			if (($i_array[0] / $j_array[1] == $i / $j)) {
				$ans[0] *= $i;
				$ans[1] *= $j;		
			}
		}
		if ($i_array[0] == $j_array[1]) {
			if ($j_array[0] == 0) {
		 		continue;
		 	}
			 if (($i_array[1] / $j_array[0] == $i / $j)) {
				$ans[0] *= $i;
				$ans[1] *= $j;		
			}
		}
	}
}
for ($i=$ans[1] / 2; $i > 1; $i--) { 
	if ($ans[1] % $i == 0 && $ans[0] % $i == 0 ) {
		if ($ans[0] == 1) {
			break;
		}
		$ans[1] /= $i;
		$ans[0] /= $i;
	}
}
echo $ans[1];