<?php

// user input of a, b, c for Quadratic equation
$a = readline('Enter Value of a: ');
$b = readline('Enter Value of b: ');
$c = readline('Enter Value of c: ');
$delta = ($b * $b) - (4 * $a * $c);


/**
 * Function for calculating root1 and root2
 * Passing parameters of a, b, c and delta
 * output- root1 and root2
 */

function roots($a, $b, $c, $delta)
{
    $root1 = (-$b + sqrt($delta)) / (2 * $a);
    $root2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "Root 1: " . round($root1,2) . "\n";
    echo "Root 2: " . round($root2,2);
}

roots($a,$b,$c,$delta);

?>

