<?php

function my_array_shift($target_array)
{
    foreach($target_array as &$v){
        $v += 100;
    }

    return $target_array;
}

//unset($v);

//関数呼び出しパターン
$array = array(1,2,3,4,5,);
foreach($array as $v1){
    echo "v = ".$v1;
}

$value = my_array_shift($array);
foreach($value as $v2){
    echo "v = ".$v2;
}

//可変関数 関数の引数として関数名を取り、関数内で関数を実行させる
function func_caller($name)
{
    if(function_exists($name)){
        $name();
    }
}

function foo()
{
    echo 'foo called';
}

func_caller('foo');



?>
