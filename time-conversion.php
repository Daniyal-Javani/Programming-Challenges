<?php

//https://www.hackerrank.com/challenges/time-conversion
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$time);
$hh = substr($time, 0, 2);
if ($time[8] == 'P') { // For 12:00:00PM
    if ($hh != 12){
        $hh += 12;
    }
    echo $hh.substr($time, 2, 6);
} else {
    if ($hh != 12){ //For 12:00:00AM
        echo substr($time, 0, 8);
    }
    else {
        $hh = '00';
        echo $hh.substr($time, 2, 6);
    }
}
