<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    $arr = [];

    for ($i = 1; $i < 42; $i++) {
        $arr[] = $i;
    }

    shuffle($arr);
    //隨機排列弄亂。

    echo implode('-', $arr);
    // implode(separte:'-', $arr)
    // 把陣列元素用"-"組合為一個字串。

    ?>

</body>

</html>