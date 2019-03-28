<?php
// https://www.hackerrank.com/challenges/new-year-chaos/problem

function minimumBribes($q, $n) {
    $result = 0;
    for ($j = 0; $j < $n; $j++) {
        if ($q[$j] > $j + 3) {
            echo 'Too chaotic' . "\n";
            return 1;
        }
    }
    for ($i = $n - 1; $i > 1; $i--) {
        if ($q[$i - 2] > $q[$i - 1]) { // a > b
            if ($q[$i - 1] < $q[$i]) { // b < c
                if ($q[$i - 2] < $q[$i]) { // a < c
                    [$q[$i -2], $q[$i - 1]] = [$q[$i - 1], $q[$i - 2]];
                    $result += 1;
                } else { // a > c
                    [$q[$i -2], $q[$i]] = [$q[$i], $q[$i - 2]];
                    [$q[$i -2], $q[$i - 1]] = [$q[$i - 1], $q[$i - 2]];
                    $result += 2;
                }
            } else { // b > c
                [$q[$i -2], $q[$i]] = [$q[$i], $q[$i - 2]];
                $result += 3;
            }
        } else { // a < b
            if ($q[$i - 1] > $q[$i]) { // b > c
                if ($q[$i - 2] < $q[$i]) { // a < c
                    [$q[$i -1], $q[$i]] = [$q[$i], $q[$i - 1]];
                    $result += 1;
                } else { // a > c
                    [$q[$i -2], $q[$i - 1]] = [$q[$i - 1], $q[$i - 2]];
                    [$q[$i -2], $q[$i]] = [$q[$i], $q[$i - 2]];
                    $result += 2;
                }
            }
        }
    }

    echo $result . "\n";
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%[^\n]", $q_temp);

    $q = array_map('intval', preg_split('/ /', $q_temp, -1, PREG_SPLIT_NO_EMPTY));

    minimumBribes($q, $n);
}

fclose($stdin);
