<?php include __DIR__ . '/part-text/HTML/config.php'; ?>
<?php include __DIR__ . '/part-text/HTML/html-head.php'; ?>
<?php include __DIR__ . '/part-text/HTML/navbar.php'; ?>

<div class="container">
    <div class="row">
        <pre>
            <?php print_r($_POST) ?>
        </pre>
    </div>

    <div class="row">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email1" value="<?= empty($_POST['email']) ? '' : htmlentities($_POST['email']) ?>" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password1" value="<?= empty($_POST['password']) ? '' : htmlentities($_POST['password']) ?>" name="password">
            </div>

            <div class="form-group">
                    <label for="mydate">Date</label>
                    <input type="datetime-local" class="form-control" id="mydate"
                           name="mydate">
            </div> 
            <!-- 提交時間-mydate -->

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
</div>

<?php include __DIR__ . '/part-text/HTML/scripts.php'; ?>
<?php include __DIR__ . '/part-text/HTML/html-foot.php'; ?>