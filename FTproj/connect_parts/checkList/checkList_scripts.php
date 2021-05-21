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

    //選擇商店，滑動動畫
    $('.checkList_shopChoName').click(function() {
        $(this).parent().siblings().slideDown('slow');
        $(this).parent().parent().siblings().find('.checkList_dliver_choInfo').slideUp('slow');
    });

    //選擇付款，滑動動畫
    $('.checkList_payMethod').click(function() {
        $(this).siblings().slideDown('slow');
        $(this).parent().siblings().find('.checkList_pay_choInfo').slideUp('slow');
    });

    //選擇該radio，則會連動內部的radio也checked
    $('.checkList_shopChoName').click(function() {

        if ( $(this).find('.shopRadio').checked = true) {

            $(this).parent().siblings().find('.shopAddress_radio').prop('checked', true);
        }
    });


    // 卡號自動換行
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

    //選擇貨到付款時，會自動清空已填的信用卡資料
    $("#arrivePayRadio").click(function(){
        $(".checkList_pay_cho input").val("");
    })
    //選擇超商取貨時，會自動清空已填的宅配資料
    $(".shopRadio").click(function(){
        $(".deliveryInfo input").val("");
    })



    //check判斷:如果有勾選，則內容為必填
    function requireData() {

        let creditRadio = document.getElementById('creditRadio');
        let arrivePayRadio = document.getElementById('arrivePayRadio');
        let deliveryRadio = document.getElementById('deliveryRadio');

        if(arrivePayRadio.checked == true){

            console.log('arrivePay', 'checked');  

                //判斷宅配選項是否有選
                if (deliveryRadio.checked == true) {
                    var address = $("#deli_address").val();
                    var reciver = $("input[name='shipment_reciver']").val();
                    var phone = $("input[name='shipment_reciver_phone']").val();

                    if (address == ""){
                        alert("請輸入收件地址");
                        return false;
                    }
                    else if (reciver == ""){
                        alert("請輸入收件人姓名");
                        return false;
                    }
                    else if (phone == ""){
                        alert("請輸入收件人電話");
                        return false;
                    }
                    else{
                    $('#orderbtn').attr('data-toggle', 'modal')
                    }

                }
                else{
                    $('#orderbtn').attr('data-toggle', 'modal')
                }      
        };

        if (creditRadio.checked == true) {

            console.log('cradio', 'checked');

            //判斷宅配選項是否有選
            if (deliveryRadio.checked == true) {
                    var address = $("#deli_address").val();
                    var reciver = $("input[name='shipment_reciver']").val();
                    var phone = $("input[name='shipment_reciver_phone']").val();

                    if (address == ""){
                        alert("請輸入收件地址");
                        return false;
                    }
                    else if (reciver == ""){
                        alert("請輸入收件人姓名");
                        return false;
                    }
                    else if (phone == ""){
                        alert("請輸入收件人電話");
                        return false;
                    }

                }

            // 判斷卡號是否格式正確
            var a = $("input[name='cardnum-p1']").val()
            var b = $("input[name='cardnum-p2']").val()
            var c = $("input[name='cardnum-p3']").val()
            var d = $("input[name='cardnum-p4']").val()
            // 判斷持卡人是否填寫
            var creditName = $("input[name='cardName']").val()
            // 判斷安全碼是否填寫 & 正確
            var cardSafeNum = $("input[name='cardSafeNum']").val()
            // 判斷日期是否填寫 & 正確
            var cardDateMM = $("input[name='cardDateMM']").val()
            var cardDateYY = $("input[name='cardDateYY']").val()


            if (a == "" || a.length < 4) {
                alert("卡號格式錯誤");
                return false; //阻止表單送出
            }
            else if (b == "" || b.length < 4) {
                alert("卡號格式錯誤");
                return false;
            }
            else if (c == "" || c.length < 4) {
                alert("卡號格式錯誤");
                return false;
            }
            else if (d == "" || d.length < 4) {
                alert("卡號格式錯誤");
                return false;
            } 

            

            else if (creditName == "") {
                alert("請輸入持卡人姓名");
                return false;
            }

            else if (cardSafeNum == "" || cardSafeNum.length < 3) {
                alert("請輸入正確的安全碼");
                return false;
            }

            else if (cardDateMM == "" || cardDateMM.length < 2) {
                alert("請輸入正確的到期日");
                return false;
            }
            else if (cardDateYY == "" || cardDateYY.length < 2) {
                alert("請輸入正確的到期日");
                return false;
            }


            else {
                $('#orderbtn').attr('data-toggle', 'modal')
            }
            

        }; 

    }


    //ajex 傳送訂單編號
    $(document).ready(function(){

        $('#orderbtn').on('click', function(e) {

            var order_id = $('#orderId').html();

            $.ajax({
                url: "test-api.php",
                method: "POST",
                data: {
                    "order_id": order_id
                },
                error:function(){
                    alert("失敗");
                },
                success:function(){
                    alert("成功");
                } 
            });

        })
    })







    // Go-Top
    $(window).scroll(function (event) {
            let scrollTop = $(window).scrollTop();
            console.log(scrollTop);

            if (scrollTop >= 500) {

                $(".index_goTopImg").addClass('show');
            } else {
                $(".index_goTopImg").removeClass('show');
            }
        });

        $('.index_goTopImg').click(function () {
            $("html,body").animate({
                scrollTop: 0}, 700);
            });

    
</script>