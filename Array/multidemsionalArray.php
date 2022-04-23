<?php

function createArray($noOfRows, $noOfColumn)
{
    $array = array();
    for ($i = 0; $i < $noOfRows; $i++) {
        for ($j = 0; $j < $noOfColumn; $j++) {
            $array[$i][$j] = readline("Enter value for position $i$j \n");
        }
    }
    return $array;
}

function displayArray($array, $noOfRows, $noOfColumn)
{
    for ($i = 0; $i < $noOfRows; $i++) {
        for ($j = 0; $j < $noOfColumn; $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "\n";
    }
}

$noOfRows = readline("Enter No. of Rows of Array");
$noOfColumn = readline("Enter No. of Columns of Array");

$myarray = createArray($noOfRows, $noOfColumn);
displayArray($myarray, $noOfRows, $noOfColumn);

?>