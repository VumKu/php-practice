<?php

$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;

echo $a + $b;
//echo $_GET['a'] + $_GET['b'];


echo '<br>';

$a = $_GET['a'] ?? 0; //php的寫法(雙問號)，比上面的寫法更精簡
$b = $_GET['b'] ?? 0;

echo $a + $b;



//在網址後方加入 ?a=某數&b=某數，網頁即可做運算。