<?php

$arr1 = [
    'name' => 'Bill',
    'age' => 27,
    'gender' => 'male',
];

$arr2 = [2, 3, 5, 6, 'abc'];

foreach ($arr1 as $key => $value) {
    echo "$key : $value<br>";
};
// 索引(key) => 值(value)，$key、$value為變數，可以設其他名字，反正取出來是索引&值就對ㄌ。
// 如果只有($arr as $a)，後面只有放一個，那它代表的是值(value)


echo "---------------------<br>";


foreach ($arr2 as $key => $value) {
    echo "$key : $value<br>";
};
