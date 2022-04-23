<?php
class PerfectNumber
{
    /**
     * function Perfect number checks whether the number is perfect or not.
     * parameters - number
     */
    function perfectNumber($num)
    {
        $check = 0;
        for ($i = 1; $i < $num; $i++) {
            if ($num % $i == 0) {
                echo $i . " + ";
                $check += $i;
            }
        }
        echo "0 = " . $check . "\n";
        if ($num == $check) {
            echo "Yes, It is a Perfect Number!!";
        } else {
            echo "NO, It is not a Perfect Number!!";
        }
    }
}
//Taking input from the user
$num = readline("Enter a Number to check whether it's Perfect or Not: ");
if (is_numeric($num)) {
    $temp = round($num); //storing in temp to check its integer or not.
} else {
    $temp = $num;
}
/**
 * Using if-else statement to check whether the user
 * has entered valid input or not.
 */
if (is_numeric($num) && $num > 0 && $temp == $num) {
    $myNumber = new PerfectNumber();
    $myNumber->perfectNumber($num);
} else {
    echo "PLEASE ENTER VALID INPUT"; //Displaying invalid message
}
