
<?php

$name = 'vum';

echo "Hello $name. <br>

<h2>Hi- hi-</h2>
";

$b = <<< randomName

randomName;

echo "abc\ndef\\aaa\"----<br>";
//雙引號內不能跳脫單引號(就是加 \' 可以直接加'就好；單引號同理，不能跳脫雙引號)

echo 'abc
def\\aaa\'----<br>';
//單引號內不能跳脫 \n 可以直接跳行就好
