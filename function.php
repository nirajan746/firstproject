<?php
function sum ($a,$b){
    return $a+$b;
}
function subtract ($a,$b){
    return $a-$b;
}
function divide($a,$b){
    if ($b==0)
        return 0;
    return ($a/$b);
}
function multiply($a,$b){
    return $a*$b;
}

echo 'sum='.sum(5,6).'<br>';
echo 'subtract='.subtract(5,78).'<br>';
echo 'divide='.divide(5,0).'<br>';
echo 'multiply='.multiply(23,45).'<br>';
    
?>