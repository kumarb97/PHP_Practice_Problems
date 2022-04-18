<?php

// Defining variables
$tails = 0;
$heads = 0;

/**
 * Taking input from the user
 */
$times = (int)readline('Enter number of times you want to flip coin: ');
if ($times > 0) {              //checking Valid input
    for ($i = 0; $i < $times; $i++) {
        $random = (rand(1, 10)) / 10;
        if ($random < 0.5) {
            ++$tails;
        }
        else {
            ++$heads;
        }
    }

    /**
     * Displaying Output
     */
    echo "Percentage of heads is " . $heads * 10 . " %" . "\n";
    echo "Percentage of tails is " . $tails * 10 . " %";
}
else {
    echo "Please enter positive integer number";  // Message displaying to enter correct input
}

?>
