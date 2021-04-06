<?php

$person = [

    [
        'name' => 'Bill',
        'age' => 29,
        'gender' => 'male',
    ],
    [
        'name' => '大衛',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => 'Vum',
        'age' => 25,
        'gender' => 'female',
    ],
];

// header('Content-Type: application/json');

echo json_encode([
    'get' => $_GET,
    'person' => $person
], JSON_UNESCAPED_UNICODE);

//JSON_UNESCAPED_UNICODE是當你的陣列裡有中文的時候，為了預防中文字無法被處理(變成\u...的unicode格式)所以加上該語法，讓JSON不要編碼Unicode。
