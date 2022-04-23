<?php

// Intially taking variable ans=0
$ans = 0;

/**
 * Taking nth value as input from the user.
 */
$num = readline('Enter Number upto which harmonic value you want: ');
if (is_numeric($num) && $num > 0) {  //Checking whether the input is valid or not
    for ($i = 1; $i <= $num; $i++) {
        if($i<$num){
        echo "1/$i" . " + ";
        $ans += 1 / $i;
        }
        else{
            echo "1/$i";
            $ans += 1 / $i;
        }
    }

    echo " = " . round($ans,2);  // displaying output upto two decimal places
}
else{
    echo "Please Enter valid input";
}
