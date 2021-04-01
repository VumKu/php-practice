<?php

$str = '{"name":"Bill","age":29,"gender":"male"}';
// php裡的字串一定要用雙引號表示。

$ar = json_decode($str);

echo "<br> {$ar->name}";
echo "<br> {$ar->gender}<br>";
// object在表示的時候要用瘦鍵頭。

echo "----------------------<br>";

$ar2 = json_decode($str, true);
//true的意思是轉換成陣列，不然依照上面的寫法，會是轉換成object

echo "<br> {$ar2['name']}";
echo "<br> {$ar2['age']}";
