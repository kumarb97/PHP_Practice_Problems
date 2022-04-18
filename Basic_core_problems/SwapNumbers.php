<?php
/**
 * Taking user input.
 */
$a = (int)readline('Enter value of A: ');
$b = (int)readline('Enter value of B: ');
echo "Before Swapping A = " . $a . " and B = " . $b . "\n";

$temp = $a; // using temporary variable.
$a= $b;
$b = $temp;

/**
 * Displaying output.
 */
echo "After Swapping A = " . $a . " and B = " . $b;

?>

