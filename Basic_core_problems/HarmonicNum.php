<?php

/**
 * defining variable
 */
$ans = 0;

/**
 * Taking user input.
 */
$num = (int)readline('Enter Number upto which harmonic value you want: ');
if($num == 0){
    echo "please enter valid input";
}
else{
    for($i=1;$i<=$num;$i++){
        $ans +=1/$i;
    }

    echo $num. "th harmonic number is " . $ans;  // displaying output
}
?>