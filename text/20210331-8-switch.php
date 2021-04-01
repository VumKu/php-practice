<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="">
        <input type="number" name="score" value="<?= $_GET['score'] ?? '' ?>">
        <input type="submit">
    </form>

    <?php
    if (isset($_GET['score'])) {
        $s = intval($_GET['score']);
        $n = intval($s / 10);

        switch ($n) {
            case 10:
                $g = 'A+';
                break;
            case 9:
                $g = 'A';
                break;
            case 8:
                $g = 'B';
                break;
            case 7:
                $g = 'C';
                break;
            case 6:
                $g = 'D';
                break;
            default:
                $g = 'F';
        }

        echo "<h2>($g)</h2>";
    }
    ?>




</body>

</html>