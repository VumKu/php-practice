<?php include __DIR__ . "/part-text/HTML/config.php" ?>

<?php

$person = [

    [
        'name' => 'Bill',
        'age' => 29,
        'gender' => 'male',
    ],
    [
        'name' => 'David',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => 'Vum',
        'age' => 25,
        'gender' => 'female',
    ],
];

?>

<?php include __DIR__ . "/part-text/HTML/html-head.php"; ?>

<div class="container">
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
            </tr>
        </thead>
        <?php foreach ($person as $value) : ?>
            <tbody>
                <tr>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['age'] ?></td>
                    <td><?= $value['gender'] ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>


<?php include __DIR__ . "/part-text/HTML/html-foot.php"; ?>