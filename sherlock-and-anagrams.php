<?php

function sherlockAndAnagrams($s) {

    // find all substrings
    $length = strlen($s);
    $subStringsByLength = [];
    for ($i=1; $i < $length; $i++) {
        for ($j=0; $j + $i <= $length; $j++) {
            $tmp = substr($s, $j, $i);
            // echo $j . ' ' . ($j + $i - 1) . $tmp . PHP_EOL;
            $tmp = str_split($tmp);
            sort($tmp);
            $subStringsByLength[$i][] = implode('', $tmp);
        }
    }

    foreach ($subStringsByLength as $subStrings) {

        // remove not needed substrings
        $duplicatedSubStrings = [];
        foreach(array_count_values($subStrings) as $val => $c) {
            if($c > 1) {
                for($i=0; $i < $c; $i++) {
                    $duplicatedSubStrings[] = $val;
                }
            }
        }

        // count anagrams
        $numberOfAnagrams = 0;
        $sCounts = count($duplicatedSubStrings);
        for ($i=0; $i < $sCounts; $i++) {
            for ($j=$i + 1; $j < $sCounts; $j++) {
                if (areAnagrams($duplicatedSubStrings[$i], $duplicatedSubStrings[$j])) {
                    $numberOfAnagrams++;
                }
            }
        }
    }

    return $numberOfAnagrams;
}

function areAnagrams($s1, $s2) {
    if (strlen($s1) !== strlen($s2)) {
        return false;
    }

    $s1 = str_split($s1);
    $s2 = str_split($s2);

    sort($s1);
    sort($s2);

    return $s1 == $s2;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);


for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = sherlockAndAnagrams($s);

    fwrite($fptr, $result . "\n");
}
fclose($stdin);
fclose($fptr);
