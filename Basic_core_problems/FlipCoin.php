<?php

// Initially using variable tails=0 and haed=0.
$tails = 0;
$heads = 0;

/**
 * Taking input from the user as how many times coin needs to be flipped.
 */
$times = readline('Enter number of times you want to flip coin: ');
if (is_numeric($times) && $times > 0) {   // checking for valid input
    for ($i = 0; $i < $times; $i++) {
        $random = (rand(1, 10)) / 10;     //Using rand function to get random number between 0.1-1.0
        if ($random < 0.5) {
            $tails += 1;
        } else {
            $heads += 1;
        }
    }

    /**
     * Displaying Output as percentage of heads and tails
     */
    echo "Percentage of heads is " . round(($heads / $times) * 100,2) . " %" . "\n";
    echo "Percentage of tails is " . round(($tails / $times) * 100,2) . " %";
} else {
    echo "Please enter positive integer number";  // Message displaying to enter correct input
}

?>