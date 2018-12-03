<?php

    //変数宣言
    $val = 1;
    $VAL = 2;

    //isset(); 変数が使用されているかどうかを返却
    var_dump(isset($val));

    //可変変数
    $val1 = 500;
    $val_name = 'val1';

    echo $$val_name,PHP_EOL;

?>