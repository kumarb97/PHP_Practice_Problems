<?php

/**
 * Taking number to check even or odd as input from user.
 */
$num = readline('Enter Number to check even or odd: ');
if(is_numeric($num)){
    $temp = round($num); // to check input should not be decimal
    }
if (is_numeric($num) && $num >= 0 && $temp==$num) {
    if ($num == 0 || $num % 2 == 0) {
        echo $num . " is an Even Number"; // displaying answer
    } else {
        echo $num . " is an Odd Number"; // displaying answer
    }
} else {
    echo "Please Enter Valid Input";
}
