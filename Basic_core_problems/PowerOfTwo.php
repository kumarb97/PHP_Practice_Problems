<?php

// Intially taking variable ans=1;
$ans = 1;

/**
 * Taking power as input from the user
 */
$power = readline("Enter number: ");
if (is_numeric($power) && $power > 0 && $power < 31) {    // Checking whether input from the user is valid or not
    for ($i = 1; $i <= $power; $i++) {
        $ans = $ans * 2;
        echo "2^" . $i . " = " . $ans . "\n";
    }
}
else{
    echo "please enter valid input ";   // Displaying message of invaid input
}

?>
