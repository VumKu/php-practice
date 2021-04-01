<?php

$a = empty($_GET['a']) ? 0 : intval($_GET['a']);
$b = empty($_GET['b']) ? 0 : intval($_GET['b']);
//是不是空，是的話給我0

echo $a + $b;
echo "<br>";

//isset判斷'變數'是否存在；empty判斷'值'是否為空

$c = [];
$d = 0;
$e = '';
$f = 'aaa';

echo empty($c) ? 'c是空的' : 'c不是空的';
echo '<br>';
echo empty($d) ? 'd是空的' : 'd不是空的';
echo '<br>';
echo empty($e) ? 'e是空的' : 'e不是空的';
echo '<br>';
echo empty($f) ? 'f是空的' : 'f不是空的';
echo '<br>';
