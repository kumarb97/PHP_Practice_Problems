<?php
/**
 * Taking input from user.
 */
$alphabet = readline('Enter Alphabet to check it is vowel or consonant: ');
$alphabet = strtolower($alphabet); // lowercase the alphabet
if (strlen($alphabet) == 1) {
    if ($alphabet == "a" || $alphabet == "e" || $alphabet == "i" || $alphabet == "o" || $alphabet == "u") {
        echo "It is a Vowel"; // output
    }
    else {
        echo "It is a Consonant"; //output
    }
}
else {
    echo "Please Enter valid input";  // Invalid message
}

?>