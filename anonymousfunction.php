<?php

    //function($v1,$v2){ return $v1 + $v2;}の部分が無名関数
    $v1 = 10;
    $v2 = 20;

    $r1 = function($t1,$t2){return $t1 + $t2;};
    $times = function($t3,$t4){return $t3 * $t4;};
    $r4 = function($v1 = 10,$v2 = 20){retunr $v1 + $v2;};
    echo '$r4 = '.$r4;

    //$r1,$timesにはそれぞれ関数オブジェクトが返却されている
    //値を代入して初めて機能する
    $r2 = $r1($v1,$v2);
    $r3 = $times($v1,$v2);
    
    echo $r2."\n".$r3."\n";

    $array = array('"ダブルクゥオート"','<tag>','"シングルクゥオート"');

    $esc = array_map(function($value){return htmlspecialchars($value,ENT_QUOTES,'UTF-8');},$array);

    echo $array[0]."\n";
?>