<?php include __DIR__ . '/part-text/HTML/config.php'; ?>
<?php
$title = '登入';

if (isset($_POST['account']) and isset($_POST['password'])) {
    if ($_POST['account'] == 'Touji' and $_POST['password'] == '1231') {
        $_SESSION['account'] = 'Touji';
    } else {
        $massage = '帳號或密碼錯誤';
    }
}

?>

<?php include __DIR__ . '/part-text/HTML/html-head.php'; ?>
<?php include __DIR__ . '/part-text/HTML/navbar.php'; ?>

<div class="container">
    <pre>
    <?php print_r($_POST) ?>
    </pre>

    <?php if (isset($massage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $massage ?>
        </div>
    <?php endif; ?>

    <div class="row">

        <?php if (isset($_SESSION['account'])) : ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['account'] . ' 您好' ?>
            </div>
            <div><a href="20210412-8-logout.php">登出</a></div>
        <?php else : ?>

            <div class="col-md-6">
                <form name="form1" method="post">
                    <div class="form-group">
                        <label for="account">account address</label>
                        <input type="text" class="form-control" id="account" name="account">

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        <?php endif; ?>
    </div>


</div>

<?php include __DIR__ . '/part-text/HTML/scripts.php'; ?>
<?php include __DIR__ . '/part-text/HTML/html-foot.php'; ?>