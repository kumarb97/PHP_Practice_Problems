<?php

// $age = array("john"=>"23","ben"=>"27","ron"=>"25");

// foreach($age as $x => $x_value){
//     echo "name=" . $x . ", age=" . $x_value;
//     echo "\n";


function createarray(){
    $arr = array();
    $size =readline("Enter size of an Array: ");
    for($i=0;$i<$size;$i++){
            $key = readline("Enter key for $i \n");
            $value = readline("Enter value for $i \n");
            $arr[$key] = $value;
            
    }
    return $arr;

}

function displayArray($arr){
    echo "Elements of array are \n";
    foreach($arr as $key => $value){
        echo $key . " => " . $value . "\n";
    }
}

$myarray =createarray();
displayArray($myarray);


?>