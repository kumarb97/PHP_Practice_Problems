<?php

class PrimeNumber
{
    /**
     * function Prime number checks whether the number is prime or not.
     * parameters - number
     */
    function isPrime($num)
    {
        $isprime = true; //boolean
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $isprime = false;
                break;
            }
        }
        if ($isprime) {
            echo "It is a prime number"; //output
        } else {
            echo "It is not a prime number"; //output
        }
    }
}

$num = readline("Enter number to check whether its prime or not: ");
if (is_numeric($num)) {   //alphabet cannot be roundof so using ifelse statement to avoid error
    $temp = round($num);  //storing in temp to check its integer or not.
} else {
    $temp = $num;
}

/**
 * Using if-else statement to check whether the user
 * has entered valid input or not.
 */
if (is_numeric($num) && $num > 0 && $num == $temp) {
    $myPrimeChecker = new PrimeNumber();
    $myPrimeChecker->isPrime($num);
} else {
    echo "PLEASE ENTER VALID INPUT";
}
