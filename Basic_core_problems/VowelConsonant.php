<?php

/**
 * Taking alphabet as input from the user
 */
$alphabet = readline('Enter Alphabet to check it is vowel or consonant: ');

if (preg_match("/[A-Za-z]{1}/", $alphabet)) {  //Checking input is valid or not
    $alphabet = strtolower($alphabet);
    if ($alphabet == "a" || $alphabet == "e" || $alphabet == "i" || $alphabet == "o" || $alphabet == "u") {
        echo "It is a Vowel"; 
    } else {
        echo "It is a Consonant"; 
    }
} else {
    echo "Please Enter valid input";  // Displaying Invalid message
}
