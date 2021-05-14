<script src="<?= WEB_ROOT ?>/bs&jq/jquery-3.6.0.js"></script>
<script src="<?= WEB_ROOT ?>/bs&jq/bootstrap.bundle.js"></script>

<script>
    // overlayNav進場
    $('.nav_burgurBar_img').click(function() {

        let navPosition = {
            transform: 'translateY(0)'
        }

        $(".nav_overlayNav").css(navPosition);
    })

    // overlayNav退場
    $('.nav_closeBtn').click(function() {

        let navPosition = {
            transform: 'translateY(-2500px)',
            transition: '.7s'
        }

        $(".nav_overlayNav").css(navPosition);
    })


    //Login hide
    $('#registerbtn').click(function() {
        $('#loginCenter').modal('hide');
    })

    $('#passwordbtn').click(function() {
        $('#loginCenter').modal('hide');
    })

    //overlay sub-menu
    $(document).ready(function() {
        $('.nav_ser_mobile').click(function() {

            $('.nav_dropDownMenu_mobile').toggle('slow');

        })
    });

    //選擇商店
    $('.checkList_shopChoName').click(function() {
        $(this).parent().siblings().slideDown('slow');
        $(this).parent().parent().siblings().find('.checkList_dliver_choInfo').slideUp('slow');


    });

    //選擇付款
    $('.checkList_payMethod').click(function() {
        $(this).siblings().slideDown('slow');
        $(this).parent().siblings().find('.checkList_pay_choInfo').slideUp('slow');
    });

    //radio相連
    $('.checkList_shopChoName').click(function() {

        if ($('input[name="deliver"]').checked = true) {


            $(this).parent().siblings().find('.shopAddress_radio').attr('checked', true);
        }
    })

    // 選信用卡付款，必填資訊
    // $('input[value="credit"]').change(function () {
    //     if ($(this).is('checked')) {
    //         $('.cardNum').attr('required')
    //     } else {
    //         $('.cardNum').removeAttr('required')
    //     }
    // })

    // let Cradio = document.getElementById('red')
    // if (Cradio.checked == true){
    //     console.log('cradio', 'checked')
    //     // $('.cardNum').attr('required')
    // } else {
    //     console.log('cradio', 'no checked')
    //     // $('.cardNum').removeAttr('required')
    // };



    //選宅配時，必填資訊


    //信用卡數字限制
    // re = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
    // if (!re.test(formValue.value))
    //     alert(`請輸入數字`);

    //計算
    $(document).ready(function() {
        var itemNum = +$(this).find('.checkList_itemNum').html();
        console.log('num', itemNum)

        var itemPrice = +$(this).find('.checkList_itemPrice').data('price')
        console.log('p', itemPrice)

        $('#checkList_itemTotalP_num').text(itemNum * itemPrice)
        console.log('totoP', itemNum * itemPrice)
    })






    $("input.cardNum").on("keydown", function(e) {
        if ((e.which >= 48 && e.which <= 57) || e.which == 8) {

            //console.log(e.target.value.length);
            if (e.target.value.length == 0 && e.which == 8) {
                $(this).prev().focus();
            }
        } else {
            e.preventDefault();
        }
    });

    $("input.cardNum").on("keyup", function(e) {

        // \D 代表非數字字元，g 代表全域尋找
        let str = (e.target.value).replace(/\D/g, "");

        $(this).val(str);
        //console.log(str.length);
        if (str.length == 4) {
            $(this).next().focus();
        }
    });

    //check判斷

    function requireData() {

        let creditRadio = document.getElementById('creditRadio');

        if (creditRadio.checked == true) {

            console.log('cradio', 'checked');

            // 判斷卡號是否格式正確
            var a = $("input[name='cardnum-p1']").val()
            var b = $("input[name='cardnum-p2']").val()
            var c = $("input[name='cardnum-p3']").val()
            var d = $("input[name='cardnum-p4']").val()

            if (a == "" || a.length < 4) {
                alert("卡號格式錯誤");
                return false;
            }
            if (b == "" || b.length < 4) {
                alert("卡號格式錯誤");
                return false;
            }
            if (c == "" || c.length < 4) {
                alert("卡號格式錯誤");
                return false;
            }
            if (d == "" || d.length < 4) {
                alert("卡號格式錯誤");
                return false;
            } else {
                $('#orderbtn').attr('data-toggle', 'modal')
            }

            // 判斷持卡人是否填寫
            var creditName = $("input[name='cardName']").val()

            if (creditName == "") {
                alert("請輸入持卡人姓名");
                return false;
            }

            // 判斷安全碼是否填寫 & 正確
            var cardSafeNum = $("input[name='cardSafeNum']").val()

            if (cardSafeNum == "" || cardSafeNum.length < 3) {
                alert("請輸入正確的安全碼");
                return false;
            }

        } else {
            console.log('cradio', 'no checked');
            // $('#orderbtn').attr('data-toggle', 'modal')

        };



    }
</script>