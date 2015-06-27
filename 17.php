<?php
$word1to20 = array(0,3,3,5,4,4,3,5,5,4,3,6,6,8,8,7,7,9,8,8,6);
$word1to20alpha = ['','one','two','three','four','five','six','seven','eight','nine',
    'ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen'
    ,'seventeen','eighteen','nineteen','twenty'];
$wordty = array(0,0,6,6,5,5,5,7,6,6);
$wordtyalpha = array(0,0,'twenty','thirty','forty','fifty','sixty','seventy','eighty'
    ,'ninety');
$sum = 0;
$row = 0;
for ($i = 1 ; $i < 1000 ; $i++){
    if($i > 99){
//        echo $word1to20alpha[floor($i/100)].' hundred';
        $sum += 7 + $word1to20[floor($i/100)];
//        echo 7 + $word1to20[floor($i/100)];
//        $row += 7 + $word1to20[floor($i/100)];
    }
    if($i % 100 != 0 && $i > 100){
//        echo ' and ';
        $sum += 3;
//        $row += 3;
//        echo 3;
    }
    if(($i % 100) < 20){
//        echo $word1to20alpha[($i % 100)].' ';
        $sum += $word1to20[($i % 100)];
//        echo $word1to20[($i % 100)];
//        $row += $word1to20[($i % 100)];
    }
    else{
//        echo $wordtyalpha[floor(($i % 100) / 10)].' '.$word1to20alpha[$i % 10];
        $sum += $wordty[floor(($i % 100) / 10)] + $word1to20[$i % 10];
//        echo $wordty[floor(($i % 100) / 10)] + $word1to20[$i % 10];
//        $row += $wordty[floor(($i % 100) / 10)] + $word1to20[$i % 10];
    }
//    echo ' '.$row;
//    $row = 0;
//    echo "\n";
}
//echo 'one thousand';
$sum += 11;
//echo "11\n";
echo $sum;