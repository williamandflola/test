<?php

$bool = true;
$bool1 = false;

if(true){
    if($bool1){
        echo "hinata";
    }
    else{
        echo "akira"."\n";
    }
}

$th = -23;

if($th <= 0){
    echo "hinata";
}
else if($th <= 20){
    echo "akira";
}
else{
    echo "love";
}

if(false):
    echo "true内";
?>

<p> このメッセージは真のときのみ <p>

<?php

else:
    echo "else内";

?>

<p> このメッセージは偽の時のみ <p>

<?php
    echo "else内2";
    endif;

    echo "endif 以降";

?>
