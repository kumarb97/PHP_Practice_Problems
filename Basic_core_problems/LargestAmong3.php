<?php

/**
 * Taking A,B and C as input from the user
 */
$a = readline('Enter value of A: ');
$b = readline('Enter value of B: ');
$c = readline('Enter value of C: ');

if (is_numeric($a) && is_numeric($b) && is_numeric($c)) { //Checking Valid input or not
    if ($a > $b && $a > $c) {
        echo "Largest number is " . $a;
    } else if ($b > $a && $b > $c) {
        echo "Largest number is " . $b;
    } else {
        echo "Largest number is " . $c;
    }
} else {
    echo "Please enter valid input"; // Displaying Invalid Message
}
