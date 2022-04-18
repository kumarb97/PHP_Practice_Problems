<?php
/**
 * Defining variable.
 */
$ans = 1;

/**
 * Taking input from the user.
 */
$power = (int)readline('Enter power : ');
if ($power > 0 && $power < 31) {    // Checking condition
    for ($i = 1; $i <= $power; $i++) {
        $ans = $ans * 2;
    }
    echo "Answer of 2^" . $power . " is " . $ans;   // Displaying output
}
else{
    echo "please enter valid input ";   // Displaying message of invaid input
}

?>
