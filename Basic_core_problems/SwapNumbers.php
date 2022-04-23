<?php

// Taking A and B as input from the user
$a = readline('Enter value of A: ');
$b = readline('Enter value of B: ');

if (is_numeric($a) && is_numeric($b)) {  //checking whether input is number or not

    // Before swapping numbers were
    echo "Before Swapping A = " . $a . " and B = " . $b . "\n";

    //swapping numbers without using third variable
    $a = $b + $a;
    $b = $a - $b;
    $a = $a - $b;

    // After swapping displaying output
    echo "After Swapping A = " . $a . " and B = " . $b;
} else {
    echo "Please enter valid input";
}
