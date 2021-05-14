<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>

    <style>

    </style>
</head>

<body>

    <form name="cart" method="post" onsubmit='cart()'>
        <input type="text" name="input">

        <button type='submit'>輸入</button>

    </form>

</body>
<script>
    function cart() {


        isPass = true;


        if (isPass) {


            $.post(

                'checkList_api.php',
                $(document.cart).serialize(),
                function(data) {

                    if (data.success) {

                        alert('成功');

                    } else {

                        alert(data.error);

                    }
                }







            ), json






        }



    }
</script>

</html>