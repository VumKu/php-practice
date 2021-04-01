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

echo "---------------------<br>";


foreach ($arr2 as $key => $value) {
    echo "$key : $value<br>";
};
