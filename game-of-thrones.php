<?php

//https://www.hackerrank.com/challenges/game-of-thrones
$_fp = fopen("php://stdin", "r");
fscanf($_fp,"%s",$pass);
$pass_array = str_split($pass);
$number_of_values = array_count_values($pass_array);
//print_r($number_of_values);
if(strlen($pass) % 2 == 1){
    $can_be_odd = True;
} else {
    $can_be_odd = False;
}
foreach ($number_of_values as $value) {
    if($value % 2 == 1){
        if($can_be_odd){
            $can_be_odd = False; //No longer can be odd!
        } else {
            echo 'NO';
            die();
        }
        
    }
}
echo "YES";