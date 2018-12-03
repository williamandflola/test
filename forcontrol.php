<?php
    $array = array(1,2,3,4,5,);
    foreach($array as $value){
        echo $value."\n";
    }

    $array1 = array("apple"=>"red","orange"=> "yellow","mellon"=>"blue");
    foreach($array1 as $color){
        echo $color."\n";
    }

    //連想配列のkey側を取り出す $nameでkey,$color1でvalueを受け取っている
    foreach($array1 as $name => $color1){
        echo "$name has $color1 color"."\n";
    }

    /*反復時に参照を用いる
    &は$color2のvalueのアドレスを示している
    アドレスを提示してその変数に"black"を代入している
    */
    foreach($array1 as &$color2){
        $color2 = "black";
    }

    //代入された結果を表示している
    foreach($array1 as $color3){
        echo $color3,"\n";
    }

    /*
    このとき$color2は$array1の最後の要素への参照を持ち続ける
    うっかり$color2をいじると$array1の最後の要素が予期せず変更される
    それを防止するために、unset($color2)を実行して参照を外す
    */

    /*   
    $color2は$array1の最後の要素へのポインタになっている
    phpはブロックスコープでないため
    $color2は$array1の最後の要素への参照を持ち続ける
    */
    $color2 = "pink";

    //最後の要素に"pink"が代入されている
    foreach($array1 as $color4){
        echo $color4."\n";
    }

    /*
    うっかり$color2をいじると$array1の最後の要素が予期せず変更される
    それを防止するために、unset($color2)を実行して参照を外す
    */

    unset($color2);
    $color2 = "purple";

    //purpleは最後の要素にもう代入されなくなっている
    foreach($array1 as $color5){
        echo $color5."\n";
    }

    






?>