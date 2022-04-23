<?php

// user input for points x and y
$x = readline('Enter Value for X: ');
$y = readline('Enter Value for Y: ');
$pattern = "/^[0-9]{1}$/";

if (preg_match($pattern, $x) && preg_match($pattern, $y)) {
    $length = sqrt(pow($x, 2) + pow($y, 2));
    echo "The Length of (" . $x . ", " . $y . ") and origin (0, 0) is: " . round($length, 3);
}
else {
    echo "Invalid input";
}
