<?php
//自動キャストがよく行われている

$age = 15;//int
$age2 = 15.6;
echo $age;
//この段階でintからStringへ自動キャスト
echo 15.0 ;
//キャストされて15に変化している
echo 15.6 ;
echo $age2 ;

$string = "1000";
if($string === 100){
    echo "num is 100",PHP_EOL;
}
else{
    echo "num is not 100",PHP_EOL;
}

?>