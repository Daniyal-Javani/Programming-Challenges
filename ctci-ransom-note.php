<?php
// https://www.hackerrank.com/challenges/ctci-ransom-note/problem

function checkMagazine($m, $magazine, $n, $note) {
    if ($m < $n) {
        echo 'No';
        return;
    }

    for ($i = 0; $i < $m; $i++) {
        if (! isset($magazineWords[$magazine[$i]])) {
            $magazineWords[$magazine[$i]] = 1;
        } else {
            ++$magazineWords[$magazine[$i]];
        }
    }

    for ($i = 0; $i < $n; $i++) {
        if (isset($magazineWords[$note[$i]]) && $magazineWords[$note[$i]] !== 0) {
            --$magazineWords[$note[$i]];
        } else {
            echo 'No';
            return;
        }
    }
    echo 'Yes';
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($stdin, "%[^\n]", $magazine_temp);

$magazine = preg_split('/ /', $magazine_temp, -1, PREG_SPLIT_NO_EMPTY);

fscanf($stdin, "%[^\n]", $note_temp);

$note = preg_split('/ /', $note_temp, -1, PREG_SPLIT_NO_EMPTY);

checkMagazine($m, $magazine, $n, $note);

fclose($stdin);
