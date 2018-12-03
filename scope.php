<?php

    //localscope
    /*
    関数内やクラスのメソッド内で宣言された変数の持つ範囲
    */
    $x = 100;

    function some_function(){
        $x = 1000;

        $y = 200;
    }

    //globalscope
    $array = array(1,2,3,4,5);
    foreach($array as $i)
    {
        echo $i,PHP_EOL;
        /*
        ブロック内で変数宣言しても
        別のphpblockや別のファイルでも
        用いることが可能である
        */

    }

    echo "Last: ",$i,PHP_EOL;

    some_function();

    echo $x;

    //エラー$yはglobalscopeで未定義
    //echo $y;
?>

次のPHPブロック

<?php

    foreach($array as $j)
    {
        echo $j,PHP_EOL;
    }

?>