<?php
class FibonacciSeries
{
    /**
     * function fibonacci calculates the fibonaccci series upto nth value
     * parameters - nth value, firstnumber, second number of series.
     */
    function fibonacci($nthValue, $firstNum, $secondNum)
    {
        echo $firstNum . " ";
        echo $secondNum . " ";
        for ($i = 1; $i <= $nthValue - 2; $i++) {
            echo $firstNum + $secondNum . " ";
            $temp = $firstNum;
            $firstNum = $secondNum;
            $secondNum = $temp + $secondNum;
        }
    }
}
// Taking input from the user
$firstNum = readline("Enter first number of fibonacci series: ");
$secondNum = readline("Enter second number of fibonacci series: ");
$nthValue = readline("How many numbers of series you want: ");

/**
 * Using if-else statement to check whether the input entered
 * by user is valid or not
 */
if (is_numeric($firstNum) && is_numeric($secondNum) && is_numeric($nthValue) &&
    $firstNum >= 0 && $secondNum >= 0 && $nthValue > 0){
        
    $myseries = new FibonacciSeries();  //creating Object
    $myseries->fibonacci($nthValue, $firstNum, $secondNum); //using function
}
else {
    echo "PLEASE ENTER VALID INPUT"; //Invalid message 
}
