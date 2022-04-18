<?php
/**
 * Taking user input.
 */
$dividend = (int)readline('Enter dividend ');
$divisor = (int)readline('Enter divisor ');

$quotient = $dividend/$divisor;
$remainder = $dividend % $divisor;

/**
 * Displaying output.
 */
echo "Quotient : " . floor($quotient) . "\n";
echo "Remainder : " . $remainder;

?>