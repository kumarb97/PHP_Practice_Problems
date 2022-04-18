<?php

/**
 * Taking user input.
 */
$a = (int)readline('Enter value of A: ');
$b = (int)readline('Enter value of B: ');

$option = (int)readline("Enter 1 for Addition\nEnter 2 for Substraction\nEnter 3 for Multiplication\nEnter 4 for Division");

switch ($option) {
    case 1:
        echo $c = $a + $b;
        break;
    case 2:
        echo $c = $a - $b;
        break;
    case 3:
       echo  $c = $a * $b;
        break;
    case 4:
        echo $c = $a / $b;
        break;
    default:
        echo "Enter valid choice";
}
