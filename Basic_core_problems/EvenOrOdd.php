<?php

/**
 * Taking number as input from user.
 */
$num = (int)readline('Enter Number to check even or odd: ');

if($num == 0 || $num % 2 == 0){
    echo $num . " is an Even Number"; // displaying answer
}
else{
    echo $num . " is an Odd Number"; // displaying answer
}

?>