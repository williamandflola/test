<?php
class A
{

}

//配列の初期化
$fruits = array("apple","orange","berry",);
$array1 = array("apple",1,1.256,1000000,);

echo $fruits[0]."\n";
echo $array1[1]."\n";
echo $array1[2]."\n";
echo $array1[3]."\n";

//代入演算子と要素の追加
$fruits[] = "cherry";
echo $fruits[3]."\n";

//連想配列
$fruits1 = array("apple"=>"red","orange" => "yellow","grape"=> "purple",);
echo $fruits1["orange"]."\n";

$players = array("japan"=>"kamamoto","korea"=>"park","saudi"=>"saiid",);
echo $players["korea"]."\n";
echo $players["japan"]."\n";







?>