<?php
/**
 * Taking dividend and divisor as input from the user
 */
$dividend = readline('Enter dividend: ');
$divisor = readline('Enter divisor: ');

if(is_numeric($dividend)){
$temp1 = round($dividend); // to check input should not be decimal
$temp2 = round($divisor);
}
if(is_numeric($dividend) && is_numeric($divisor) && $divisor!=0 && $temp1==$dividend && $temp2==$divisor){
$quotient = $dividend/$divisor;
$remainder = $dividend % $divisor;
echo "Quotient : " . floor($quotient) . "\n";
if($remainder < 0){
echo "Remainder : " . -$remainder;
}
else{
    echo "Remainder : " . $remainder;
}
}
else{
    echo "Please Enter Valid input ";
}

?>