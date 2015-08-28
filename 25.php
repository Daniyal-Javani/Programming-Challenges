<?php
include("../BigInteger.php");
$times = microtime(true);

$fib = new Math_BigInteger(1);
$fib_pre = new Math_BigInteger(1);
for($i = 3 ; ;$i++){
    $temp = (new Math_BigInteger($fib))->add($fib_pre);
    $fib_pre = $fib;
    $fib = $temp;
//    echo $i.' -> '.$fib."\n";
    if(strlen($fib->toString())==1000){
        echo $i."\n";
        break;
    }
}
echo microtime(true) - $times."\n";
