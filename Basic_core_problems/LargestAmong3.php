<?php

/**
 * Taking user input.
 */
$a = (int)readline('Enter value of A: ');
$b = (int)readline('Enter value of B: ');
$c = (int)readline('Enter value of C: ');

if ($a > $b && $a > $c){
    echo "Largest number is " . $a;
}
else if ($b > $a && $b > $c){
    echo "Largest number is " . $b;
}
else{
    echo "Largest number is " . $c;
}

?>