<?php

/**
 * Taking user input.
 */
$a = readline('Enter value of A: ');
$b = readline('Enter value of B: ');

$option = readline("Enter 1 for Addition\nEnter 2 for Substraction\nEnter 3 for Multiplication\nEnter 4 for Division");

switch ($option) {
    case 1:
        echo $a + $b;
        break;
    case 2:
        echo $a - $b;
        break;
    case 3:
       echo  $a * $b;
        break;
    case 4:
        echo $a / $b;
        break;
    default:
        echo "Enter valid choice";
}
