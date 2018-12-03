<?php

$i = 0;

while($i < 10){
    echo $i."\n";
    $i++;
}

$j = 0;

do{
    echo $j."\n";
    $j++;
}while($j < 10);

$array = array(1,2,3,4,5,);

for($s = 0, $e = count($array); $s < $e; $s++){
    //echo $s."\n";
    echo $array[$s]."\n";
}

?>