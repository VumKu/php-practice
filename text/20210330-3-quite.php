<?php

$name = "vum";

echo "Hello I'm $name.<br>";
echo 'Hello $name <br>';

//雙引號，可叫出變數的內容。
//單引號，呼叫出引號內的純內容，不會叫出變數。
//php中無反引號。

echo "Hello I'm {$name}123.<br>";
//也等於echo "Hello I'm ${name}123.<br>";
//如果在變數後方想加入相連的字，可使用大括弧把變數包起來。