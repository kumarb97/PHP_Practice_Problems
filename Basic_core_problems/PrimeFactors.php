<?php

/**
 * defining variable
 */
$ans = 0;

/**
 * Taking user input.
 */
$num = readline('Enter Number of which you want to find prime factors: ');
for($i=2;$i<$num;$i++){
    while($num % $i == 0){
        echo $i . "\n";
        $num /= $i;

    }
    if($num > 2){
        echo $num . "\n";
    }
}
