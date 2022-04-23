<?php

/**
 * Taking year as input from user.
 */
$year = (int)readline('Enter year: ');

if ($year>0 && preg_match("/[0-9]{4}/",$year)) {   // checking whether input is valid or not
    if ($year % 4 == 0 && $year % 100!= 0 || $year % 400 == 0) {
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
