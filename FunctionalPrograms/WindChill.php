<?php

/**
 * Note: the formula is not valid if t is larger than 50 in absolute value 
 * or  if v is larger than 120 or less than 3 
 * (you may assume that the values you get are in that range).
 */

 // Taking input from the user
$t = readline('Enter Temperature in Fahrenheit: ');
$v = readline('Enter Wind-speed in miles per hour: ');


/**
 * Function to calculate windchill
 * Passing v and t parameters
 * returns output
 */
function windChill($t, $v)
{
    if ($t < 50 && $v > 3 && $v < 120) {
        $w = 35.74 + (0.6215 * $t) + (((0.4275 * $t) - 35.75) * (pow($v, 0.16)));
        return round($w,2);
    } else {
        return "Cannot be determined as you entered invalid output";
    }
}
echo "The Effective temperature i.e wind chill: " . windChill($t, $v);
