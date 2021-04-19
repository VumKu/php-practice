<?php include __DIR__. '/part-text/HTML/config.php' ?>
<? 

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
        <!-- print_r 印出陣列 -->
        <!-- 要給 PHP 能夠用 $_POST 函式讀取的表單必須包含 method="post" 這樣的標籤 -->
    </pre>

    <div class="row">

    <?php if (isset($massage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $massage ?>
        </div>
    <?php endif; ?>

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

</div>

<?php include __DIR__ . '/part-text/HTML/scripts.php'; ?>
<?php include __DIR__ . '/part-text/HTML/html-foot.php'; ?>