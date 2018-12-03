<?php
$str1 = 'this is string';
$str2 = "this is string";
$str3 = 'hi, $str2 \n ';
$str4 = "hi, $str2 \n";

echo $str3;
echo $str4;

$age = 15;

//$ageyearsは未定義なのでエラーになる
echo "$ageyears old.",PHP_EOL;
//｛｝によって変数名がageであることを示し、years以降は文字列として扱う
echo "${age}years old.",PHP_EOL;



?>