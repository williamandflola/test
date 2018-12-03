<?php
/*
//整数型-int
$int1 = 1;
$int2 = 0xff;//16進数で代入
//キャスト
$string1 = "1";
$int3 = intval("2");
$int4 = (int)$string1;

echo $int1 + $int4,PHP_EOL; 

//浮動小数点-float
$float1 = 1.2;

echo $float1,PHP_EOL;

//文字列-String
$string2 = "this is a pen.\n That's right.";
$string3 = 'this is a pen.\n That\'s right.';

echo $string2;
echo $string3;

$age = "15";
$ageyears = "25";

echo "$ageyears old.",PHP_EOL;
//これでは変数がageなのかageyearsか分からない
echo "${age}years old.";
//｛｝でくくることで初めて$ageを指定することが出来る
*/
//<<<-ヒアドキュメント
$foo = <<<EOI
akira<br>
minoru<br>
takashi
EOI;

echo $foo;

?>