<?php
include('Math/BigInteger.php');
$num = new \phpseclib\Math\BigInteger(1);
$i = new \phpseclib\Math\BigInteger(100);
for( ; $i->compare(new \phpseclib\Math\BigInteger(0)) > 0 ; $i = $i->subtract(new \phpseclib\Math\BigInteger(1)) ){
    $num = $num->multiply($i);
}
$strNum = $num->toString();
$sum = 0;
for($j = 0 ; $j < strlen($strNum) ; $j++){
    $sum += $strNum[$j];
}
echo $sum;