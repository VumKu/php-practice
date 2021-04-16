<?php include __DIR__ . '/part-text/HTML/config.php'; ?>
<?php
$title = '會員登入';
$pageName = 'login';
?>

<?php include __DIR__ . '/part-text/HTML/html-head.php'; ?>
<?php include __DIR__ . '/part-text/HTML/navbar.php'; ?>

<style>
    form.form-group small.error {
        color: red;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">會員登入</h5>

                    <form name="form1" method="post" novalidate onsubmit="checkForm(); return false;">
                        <div class="form-group">
                            <label for="name">*Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <!-- 加入required代表該欄位必填 -->
                            <small class="form-text error"></small>
                        </div>

                        <div class="form-group">
                            <label for="password">*密碼</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <small class="form-text error"></small>
                        </div>

                        <button type="submit" class="btn btn-primary">登入</button>
                    </form>
                </div>
            </div>


        </div>
    </div>



</div>
<?php include __DIR__ . '/part-text/HTML/scripts.php'; ?>

<script>
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
    const $nickname = $('#nickname'),
        $email = $('#email');
    const fileds = [$nickname, $email];

    function checkForm() {
        // 回復原來的狀態
        fileds.forEach(el => {
            el.css('border', '1px solid #CCCCCC');
            el.next().text('');
        });

        let isPass = true;

        // if ($name.val().length < 2) {
        //     isPass = false;
        //     $name.css('border', '1px solid red');
        //     $name.next().text('請輸入正確的姓名');
        // }
        if (!email_re.test($email.val())) {
            isPass = false;
            $email.css('border', '1px solid red');
            $email.next().text('請輸入正確的 email');
        }
        // if (!mobile_re.test($mobile.val())) {
        //     isPass = false;
        //     $mobile.css('border', '1px solid red');
        //     $mobile.next().text('請輸入正確的手機號碼');
        // }

        if (isPass) {
            $.post(
                'login-api.php',
                $(document.form1).serialize(),
                function(data) {
                    if (data.success) {
                        alert('登入成功');
                        lacation.href = './';
                    }else{
                        alart(data.error);
                    }
                },
                'json'
            )
        }

    }
</script>
<?php include __DIR__ . '/part-text/HTML/html-foot.php'; ?>