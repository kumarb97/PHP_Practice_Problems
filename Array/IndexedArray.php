<?php
function createArray(){
    $array = array();
    $size = readline('Enter size of the Array:');
    for($i=0;$i<$size;$i++){
        $array[$i] = readline("Enter $i value of array \n");
    }
    return $array;
}

function displayArray($array){
    echo "Elements of array are \n";
    for($i=0;$i<count($array);$i++){
        echo $array[$i] . " ";
    }
}

$myarray = createarray();
displayarray($myarray);

?>
