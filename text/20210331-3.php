<?php

echo 5 || 7; //在phph裡會運算出布林值，前面5是true，算到true他就會停下來了

echo '<br>';

$a = 5 or $b = 3; //or的權重比'等於'還低
$c = 5 || $d = 6; //||的權重比'等於'還高

echo "\$a = $a, \$b = $b";
// 所以會先運算'等於'，$a = 5，or的權重比較低，就不會算到$b=3那塊，所以被b寫成無定義。

echo "\$c = $c, \$d = $d";
// ||的權重比較高，所以不會運送等於的部分，前面5算出來是true，所以c=1。