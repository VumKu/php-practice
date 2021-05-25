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
        $(".checkList_pay_choInfo input").val("");
    });
    //選擇超商取貨時，會自動清空已填的宅配資料
    $(".shopRadio").click(function(){
        $(".deliveryInfo input").val("");
    });




    //ajex 傳送訂單編號
    

        $('#orderbtn').on('click', function() {



            // let order_id = 

            // JSON.stringify( order_id ); 
            // let obj = JSON.parse(order_id);
            // console.log(typeof order_id);


            // $('#orderID').html(orderID);


            // $.get(
            //     'test-api.php',
            //     function(data){
            //         if(data.success){
            //             alert('編號已送出')
            //         }else{
            //             alert(data.error)
            //         }
            //     },'json')

            // console.log(order_id);
                
            $.ajax({
                url: "test-api.php",
                // dataType: "json",
                method: "POST",
                data:{
                    order_id: $("#orderID").html()
                },
                error:function(){
                    alert("失敗");
                    // console.log(order_id);
                },
                success:function(data){
                    // console.log(order_id);
                    console.log(data);
                    // $("#orderID").html(order_id);
                    alert("成功");
                } 
            });

            
            // $.post(
            //     'test-api.php',
            //     $('.checkList_shipFee').attr('name'): $('.checkList_shipFee').text(),
            //     function(data){
            //         if(data.success){
            //             alert('訂單已送出');
            //         } else {
            //             // console.log('資料沒有送出')
            //             alert(data.error);
            //         }
            //     },
            //     'json'
            // )


            // $.ajax({
            //     url: "test-api.php",
            //     method: "POST",
            //     data: {
            //         shipment_fee: $('.checkList_shipFee').text()
            //     },
            //     error:function(){
            //         alert("失敗");
            //     },
            //     success:function(){
            //         alert("成功");
            //     } 
            // });

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