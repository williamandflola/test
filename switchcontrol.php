<?php
    $hour = date('G');
    echo "hour = ".$hour;

    switch($hour){
        case '6': 
            echo "6 am"."\n";
            break;
        case '12':
            echo "12 am"."\n";
            break;
        case '16':
            echo "16 pm"."\n";
            break;
        default:
            echo "bye"."\n";
            break;
    }

?>