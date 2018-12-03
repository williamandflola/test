<?php

//文字列連結演算子
$age = 15;
$sen = "Tom is ".$age." years old.";

echo $sen;

//複合演算子
$a = 10;
$a += 1;

echo $a."\n";
$b = 2000;
$b = $b + 10000;

echo $b."\n";

$c = 10;
echo $c++."\n";
echo $c."\n";
echo ++$c."\n";
echo $c."\n";

//型演算子
class A
{

}

$a = new A();

if($a instanceof A){
    echo "a is class A.";
}
else{
    echo "not A";
}


?>