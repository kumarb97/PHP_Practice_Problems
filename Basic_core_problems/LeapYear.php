<?php

/**
 * Taking year as input from user.
 */
$year = (int)readline('Enter year: ');
$temp = (string)$year;      // converting int to string for validation.

if (strlen($temp) == 4) {   // checking valid input
    if ($year % 400 == 0) {
        echo $year . " is a leap year.";
    }
    elseif ($year % 100 == 0) {
        echo $year . " is not a leap year.";
    }
    elseif ($year % 4 == 0) {
        echo $year . " is a leap year.";
    }
    else {
        echo $year . " is not a leap year.";
    }
}
else {
    echo "please enter valid input";  // Displaying invalid input message.
}

?>
