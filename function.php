<?php

function add($v1,$v2)
{
    $answer = $v1 + $v2;
    return $answer;
}

$v3 = add(10,20);

echo "v3 = ".$v3."\n";

//標準に定義されているabsという同名の関数が既に存在している
/*
function abs($num)
{
    if($num < 0){
        return -$num;
    }
    
    return $num;
}
*/

function my_abs($num )
{
    if($num < 0){
        return -$num;
    }

    return $num;
}

echo "my_abs = ".my_abs(-500);

/*
引数に既定の値を設定することが可能であるが、定数値でなければならない
*/

/*既定値を定める引数は、定めない引数より後に記述する
function hello($name = 'akira',$greeting)
上記のようにするとコンパイルエラー
*/

function hello($name = 'akira',$greeting = 'hello')
{
    echo $name." said ".$greeting;
}

hello();

hello('hinata','good morning');

/*
引数や返り値の型を限定するタイプヒンデイング
*/

function array_output(array $values)
{
    if(is_array($values)){
        foreach($values as $v){
            echo $v."\n";
        }
    }
}

$array = array(1,2,3,4,5,6,);
array_output($array);
//引数の型を配列のみに設定したにも関わらずそれ以外のものを引数としたため
array_output(1);
//aaaaaa



?>