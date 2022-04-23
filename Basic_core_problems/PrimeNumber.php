<?php

/**
 * Taking number as input from user.
 */
$isprime = true;
$num = (int)readline('Enter Number to check its prime or not ');
for($i=2;$i<$num;$i++){
    if($num % $i == 0){
        $isprime =false;
        break;
    }
}
if($isprime){
    echo "It is a prime number"; //output
}
else{
    echo "It is not a prime number"; //output
}
?>