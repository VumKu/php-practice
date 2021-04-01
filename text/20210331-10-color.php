<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <table>
        <?php for ($k = 1; $k < 10; $k++) : ?>
            <tr>
                <?php for ($i = 1; $i < 16; $i++) :
                    $c = sprintf('#%X%X%X', $k, $i, $i,);
                    //隨著後面三個值的不同，就會跑出不同顏色
                ?>
                    <td style="background-color: <?= $c ?>;"></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>

    </table>
</body>

</html>