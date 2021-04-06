<?php

$p1 = [
    'name' => 'Bill',
    'age' => 27,
    'gender' => 'male',
];

$p2 = $p1;
$p3 = &$p1;
// 與js寫法不同，在js裡寫$p2 = $p1時，如果之後p1改變，p2也會跟著變動；但在php裡，p2還是會維持p1一開始的參照數，除非像p3，加上一個&，它就會跟著變動(如果後面跟著改變p3，echo p1的時候也會呼叫出p3內容)

// PHP 的"&"允許你用兩個變數來指向同一個內容

$p1['name'] = '比爾';

echo '$p1: ';
echo json_encode($p1, JSON_UNESCAPED_UNICODE) . '<br>';
echo '$p2: ';
echo json_encode($p2, JSON_UNESCAPED_UNICODE) . '<br>';
echo '$p3: ';
echo json_encode($p3, JSON_UNESCAPED_UNICODE) . '<br>';
