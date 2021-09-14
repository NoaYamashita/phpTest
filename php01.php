<?php

//1. $a　という変数に3を、$b　という変数に7を代入して、echoを使って$a+$bの結果を表示してみましょう。
$a=3;
$b=7;
echo $a+$b;
echo "<br>";

//2. $array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
$array_month = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
echo $array_month[7];
echo "<br>";

//3. $hello　という変数に　”Hello, “を $name という変数にあなたの名前を、$world という変数に　”‘s World!” を代入して、各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう。
$hello = "Hello, ";
$name = "Noa Yamashita";
$world = "‘s World!";
echo $hello . $name . $world;
echo "<br>";

//4. $tech_boostに “tech “という文字列が代入されています。複合演算を使って、echo $tech_boost:と実行すると「tech boost」と表示されるように実装してみましょう。
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;
echo "<br>";

//5. 【応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは1つとは限りません。)
$calendar2020 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月",
];

// 12月を表示する
echo $calendar2020["December"];
?>




