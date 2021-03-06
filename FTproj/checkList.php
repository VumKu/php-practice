<?php include __DIR__ . '/connect_parts/config.php'; ?>

<?php

$title = '灣廟 | 結帳確認';
$pageName = 'check_list & payment method';

// $order_id = (int)$_GET['orderID'];

// $o_sql = "SELECT `order_id` FROM `order_sum`";
// $oid = $pdo->query($o_sql)->fetchAll();
// $o_stmt = $pdo -> query($o_sql);
// $order_id = $o_stmt -> fetch(PDO::FETCH_NUM)[0];

//訂單編號：前8位為日期，剩下取time()結果的後五位
// $order_id = date("YmdHis").substr(microtime(),2,4);

// $_SESSION['order_id'] = $order_id;


// $orderID = $_POST['order_id'];
// $id_sql = "SELECT * FROM `order_sum` WHERE `order_id`";
// $id_row = $pdo->query($id_sql)->fetch();

// echo json_encode($id_row);

// $id_sql = "INSERT INTO `order_sum`(
//     `order_id`
// ) VALUES (
//     ?
// )";

// $id_stmt = $pdo->prepare($id_sql);
// $id_stmt->execute([
// $_POST['order_id'],
// ]);

// $receive_orderID = $_POST['order_id'];
// echo $receive_orderID;

// $post_orderID = "UPDATE `order_sum` SET `order_id`='[$receive_orderID]'"; 


$_SESSION = [
    'cart' => [
        'order_id' => date("YmdHis").substr(microtime(),2,4),
        'products' => [
            [
                'sid' => '1',
                'name' => '平安茶',
                'attr' => '一組24包',
                'price' => '240',
                'qty' => '1'
            ],
            [
                'sid' => '8',
                'name' => '皮革平安符',
                'attr' => '藍色',
                'price' => '200',
                'qty' => '1'
            ]
        ],
        'trip' => [
            [
                'sid' => '3',
                'name' => '北港媽祖廟一日遊',
                'attr' => '一日遊，含午餐',
                'date' => '6/30',
                'price' => '888',
                'qty' => '1'
            ]
        ],
        'light' => [
            [
                'sid' => '1',
                'name' => '悠仁',
                'attr' => '光明燈',
                'price' => '600',
                'qty' => '1',
                'note' => [
                    'name' => '悠仁',
                    'gender' => '男',
                    'birth' => '3月20日',
                    'address' => '宮城縣仙台市'
                ]
            ],
            [
                'sid' => '6',
                'name' => '憂太',
                'attr' => '平安燈',
                'price' => '600',
                'qty' => '1',
                'note' => [
                    'name' => '憂太',
                    'gender' => '男',
                    'birth' => '3月7日',
                    'address' => '宫城县仙台市'
                ]
            ],
        ]
    ],
    
    'user' => [
        'id' => 'alice1234',
    ],

    ];


?>


<?php include __DIR__ . '/connect_parts/checkList/checkList_htmlHead.php' ?>
<?php include __DIR__ . '/connect_parts/navbar2.php' ?>



<div class="checkListContainer">
    <div class="checkList_title">結帳</div>

    <div class="checkList_prod_cate">
        <div class="checkList_prod_cateBox">
            <p></p>
            <p>商品名稱</p>
            <p>選項</p>
            <p>單價</p>
            <p>數量</p>
            <p>總價</p>
            <p>備註</p>
        </div>
    </div>

    <div class="checkList_itemContainer">

        <!-- product -->
        <!-- PHP變數待調整 -->
        <?php foreach ($_SESSION['cart']['products'] as $i) : ?>
            <div class="checkList_item checkList_product">
                <div class="checkList_itemImgBox ">
                    <img src="./img/indexproduct(2).jpg" alt="">
                </div>
                <div class="checkList_itemWordBox">
                    <p class="checkList_itemName"><?= $i['name'] ?></p>
                    <p class="checkList_itemAttr"><?= $i['attr'] ?></p>
                    <p class="checkList_itemPrice" data-price="<?= $i['price'] ?>"></p>
                    <p class="checkList_itemNum" data-qty="<?= $i['qty'] ?>"></p>
                    <p class="checkList_itemTotalP"></p>
                    <p class="checkList_itemNote"></p>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Trip -->
        <!-- PHP變數待調整 -->
        <?php foreach ($_SESSION['cart']['trip'] as $j) : ?>
            <div class="checkList_item checkList_trip">
                <div class="checkList_itemImgBox">
                    <img src="./img/indexproduct(2).jpg" alt="">
                </div>
                <div class="checkList_itemWordBox">
                    <p class="checkList_itemName"><?= $j['name'] ?></p>
                    <p class="checkList_itemAttr"><?= $j['attr'] ?></p>
                    <p class="checkList_itemPrice" data-price="<?= $j['price'] ?>"></p>
                    <p class="checkList_itemNum" data-qty="<?= $j['qty'] ?>"></p>
                    <p class="checkList_itemTotalP"></p>
                    <p class="checkList_itemNote"></p>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- light -->
        <!-- PHP變數待調整 -->
        <?php foreach ($_SESSION['cart']['light'] as $k) : ?>
            <div class="checkList_item checkList_light">
                <div class="checkList_itemImgBox">
                    <img src="./img/indexproduct(2).jpg" alt="">
                </div>
                <div class="checkList_itemWordBox">
                    <p class="checkList_itemName"><?= $k['name'] ?></p>
                    <p class="checkList_itemAttr"><?= $k['attr'] ?></p>
                    <p class="checkList_itemPrice" data-price="<?= $k['price'] ?>"></p>
                    <p class="checkList_itemNum" data-qty="<?= $k['qty'] ?>"></p>
                    <p class="checkList_itemTotalP"></p>
                    <p class="checkList_itemNote">

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" 
                        data-content="
                        
                        點燈者: <?= $k['note']['name']?></br>
                        性別: <?= $k['note']['gender']?></br>
                        生辰: <?= $k['note']['birth']?></br>
                        住址: <?= $k['note']['address']?>
                        
                        " data-html='true'>查看詳情</button>

                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>


    <form name="form1" method="post" novalidate onsubmit="checkForm(); return false;">
        <div class="checkList_deliverBox">
            <div class="checkList_subTitle">寄送方式</div>
            <div class="checkList_info">選擇寄送方式</div>

            <div class="checkList_deliverContent">
                <div class="checkList_deliver_cho">
                    <div class="checkList_deliver_choName">

                        <label class="checkList_shopChoName">
                            <input type="radio" name="shipment_method" value="7-11" class="shopRadio"> 711
                        </label>

                        <p data-price="60">+ NT. 60</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                <input type="radio" name="shipment_shipName" value="大安門市" class="shopAddress_radio"> 大安門市
                            </label>
                            <div class="checkList_dliver_shopAddress">
                                <p>106台北市大安區復興南路二段203號</p>
                                <div class="checkList_dliver_shopReceiver">
                                    <span>簡峰峰</span>
                                    <span>(+886)987654321</span>
                                </div>
                            </div>
                        </div>
                        <button class="checkList_btn"><a href="">選擇門市</a></button>
                    </div>
                </div>

                <div class="checkList_deliver_cho">
                    <div class="checkList_deliver_choName">
                        <label class="checkList_shopChoName">
                            <input type="radio" name="shipment_method" value="familyMart" class="shopRadio"> 全家
                        </label>
                        <p data-price="60">+ NT. 60</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                <input type="radio" name="shipment_shipName" value="西華門市" class="shopAddress_radio"> 西華門市
                            </label>
                            <div class="checkList_dliver_shopAddress">
                                <p>106台北市大安區復興南路二段203號</p>
                                <div class="checkList_dliver_shopReceiver">
                                    <span>簡峰峰</span>
                                    <span>(+886)987654321</span>
                                </div>
                            </div>
                        </div>
                        <button class="checkList_btn"><a href="">選擇門市</a></button>
                    </div>
                </div>

                <div class="checkList_deliver_cho">
                    <div class="checkList_deliver_choName">
                        <label class="checkList_shopChoName">
                            <input type="radio" name="shipment_method" value="hiLife" class="shopRadio"> 萊爾富
                        </label>
                        <p data-price="60">+ NT. 60</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                <input type="radio" name="shipment_shipName" value="德欣門市" class="shopAddress_radio"> 德欣門市
                            </label>
                            <div class="checkList_dliver_shopAddress">
                                <p>106台北市大安區復興南路二段203號</p>
                                <div class="checkList_dliver_shopReceiver">
                                    <span>簡峰峰</span>
                                    <span>(+886)987654321</span>
                                </div>
                            </div>
                        </div>
                        <button class="checkList_btn"><a href="">選擇門市</a></button>
                    </div>
                </div>

                <div class="checkList_deliver_cho">
                    <div class="checkList_deliver_choName">
                        <label class="checkList_shopChoName">
                            <input type="radio" name="shipment_method" value="delivery" id="deliveryRadio"> 宅配
                        </label>
                        <p data-price="100">+ NT. 100</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                <input type="radio" name="shipment_shipName" value="宅配" class="shopAddress_radio"> 收件地址
                                                    
                                <p class="checkList_importment">*以下皆為必填資訊</p>

                                <div class="deliveryInfo">
                                    <input type="text" name="shipment_reciver" placeholder="收件人">
                                    <small class="form-text error"></small>
                                    <input type="text" name="shipment_reciver_phone" placeholder="聯絡電話">
                                    <small class="form-text error"></small>
                                    <input type="text" name="shipment_address" placeholder="地址" size="30" id="deli_address">
                                    <small class="form-text error"></small>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="checkList_payBox">
            <div class="checkList_subTitle">付款方式</div>
            <div class="checkList_info">選擇付款方式</div>

            <div class="checkList_payContent">
                <div class="checkList_pay_cho">
                    <label class="checkList_payMethod">
                        <input type="radio" name="payment_method" value="貨到付款" id="arrivePayRadio" checked>貨到付款
                    </label>
                </div>

                <div class="checkList_pay_cho">
                    <label class="checkList_payMethod">
                        <input type="radio" name="payment_method" value="信用卡付款" id="creditRadio"> 信用卡 / 金融卡
                    </label>

                    <div class="checkList_pay_choInfo checkList_choInfo">
                        <p class="checkList_importment">*為必填</p>
                        
                            <label>*請輸入卡號:
                                <input class="cardNum" type="text" name="cardnum-p1" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                                <input class="cardNum" type="text" name="cardnum-p2" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                                <input class="cardNum" type="text" name="cardnum-p3" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                                <input class="cardNum" type="text" name="cardnum-p4" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">
                                <small class="form-text error"></small>
                            </label>
                            <br />
                            <label>*持卡人姓名:
                                <input class="cardName" type="text" name="cardName">
                                <small class="form-text error"></small>
                            </label>
                            <br />
                            <label>*安全碼:
                                <input class="cardSafeNum" type="text" name="cardSafeNum" maxlength="4" size="4" oninput="value=value.replace(/[^\d]/g,'')" placeholder="CSC">
                                <small class="form-text error"></small>
                            </label>
                            <br />
                            <label>*到期日:
                                <input class="cardDate" type="text" name="cardDateMM" maxlength="2" size="2" oninput="value=value.replace(/[^\d]/g,'')" placeholder="MM"> /
                                <input class="cardDate" type="text" name="cardDateYY" maxlength="2" size="2" oninput="value=value.replace(/[^\d]/g,'')" placeholder="YY">
                                <small class="form-text error"></small>
                            </label>
                        
                    </div>
                </div>
            </div>

        </div>

        <div class="checkList_totalPriceContainer">
            <div class="checkList_subTitle">訂單金額</div>
            <div class="checkList_totalPricInfo">
                <div class="checkList_totalPricInfoBox">
                    <p>商品金額</p>
                    <p class="totalPriceBox"></p>
                </div>

                <div class="checkList_totalPricInfoBox">
                    <p>運費金額</p>
                    <p name="shipment_fee" class="checkList_shipFee">未選擇配送方式</p>
                </div>

                <div class="checkList_totalPricInfoBox">
                    <p>訂單總金額</p>
                    <p class="checkList_orderPrice">計算中</p>
                </div>
            </div>
        </div>
        
        
        <div class="checkList_finBtn">
            <button type="submit" class="checkList_btn" data-target="#finishOrder" id="orderbtn" onclick="checkForm(); return false;">確認下訂</button>
        </div>
    </form>
</div>

<!-- finishOrder -->
<div class="modal fade" id="finishOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-re">
            <div class="modal-header modal-header-re">
                <div class="modal_header_imgBox">
                    <img src="./img/finishOrder.svg" alt="">
                    <h5 class="modal-title" id="exampleModalCenterTitle">已完成訂單</h5>
                </div>
            </div>
            <div class="modal-body modal-body-re">
                <div class="modal-infoContainer">
                    <img src="./img/checkList_smileFace.svg" alt="">
                    <p>感謝您的支持</p>
                </div>
                <div class="modal-orderNum">
                    <span>訂單編號:</span>
                    <span name="order_id" id="orderID"><?= $_SESSION['cart']['order_id'] ?></span>
                </div>
            </div>
            <div class="modal-footer modal-footer-re">
                <button type="button" class="btn-primary-re"><a href="index.html">回到首頁</a></button>
                <button type="button" class="btn-primary-re"><a href="">查看訂單</a></button>
            </div>
        </div>
    </div>
</div>




<div class="checkList_bccImg">
    <img src="./img/checkList_bccImg.png" alt="">
</div>


<?php include __DIR__ . '/connect_parts/go-top.php' ?>

<?php include __DIR__ . '/connect_parts/checkList/checkList_scripts.php' ?>

<script>

    $(function () {
    $('[data-toggle="popover"]').popover();
    });

    const dallorCommas = function(n){
            return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

   $(document).ready(function(){
       
        let prod_total = 0;
        let trip_total = 0;
        let light_total = 0;
        $('.checkList_product').each(function(){
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);

            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            prod_total += price * qty;
        });

        $('.checkList_trip').each(function(){
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);

            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            trip_total += price * qty;
        });

        $('.checkList_light').each(function(){
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);

            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            light_total += price * qty;
        });

        //最後的商品總金額
        $('.totalPriceBox').text('NTD. ' + dallorCommas(prod_total + trip_total + light_total));

        //運費選擇
        $('.checkList_deliver_choName input').click(function(){
            const shipFee = $(this).parent().siblings().attr('data-price') * 1;

            $('.checkList_shipFee').text('NTD. ' + shipFee);

            //訂單總金額
            const orderPrice = prod_total + trip_total + light_total + shipFee;
            $('.checkList_orderPrice').text('NTD. ' + orderPrice);

        })



        


        
   });
   


   // 判斷卡號是否格式正確(所設定的變數)
   const cardnumP1 = $("input[name='cardnum-p1']"),
        cardnumP2 = $("input[name='cardnum-p2']"),
        cardnumP3 = $("input[name='cardnum-p3']"),
        cardnumP4 = $("input[name='cardnum-p4']");

    // 判斷持卡人是否填寫
    const creditName = $("input[name='cardName']");
        
    // 判斷安全碼是否填寫 & 正確
    const cardSafeNum = $("input[name='cardSafeNum']");

    // 判斷日期是否填寫 & 正確
    const cardDateMM = $("input[name='cardDateMM']"),
        cardDateYY = $("input[name='cardDateYY']");


    // 判斷電話號碼格式(所設定的變數)
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

    // 判斷宅配所填內容(所設定的變數)
    const reciver = $("input[name='shipment_reciver']"),
        phone = $("input[name='shipment_reciver_phone']"),
        address = $("#deli_address");

    const fileds1 = [
        cardnumP1, cardnumP2, cardnumP3, cardnumP4,
        cardDateMM, cardDateYY
    ];
    const fileds2 = [
        creditName, cardSafeNum
    ];
    const fileds3 = [
        reciver, phone, address
    ];




   function checkForm() {

        //如有錯誤部分已被修正，則恢復原來狀態
        fileds1.forEach(el1=>{
            el1.css('border','none');
            el1.css('border-bottom','1px solid #aaa');
            el1.parent().find('.form-text').text('');
        });
        fileds2.forEach(el2=>{
            el2.css('border','none');
            el2.css('border-bottom','1px solid #aaa');
            el2.next().text('');
        });
        fileds3.forEach(el3=>{
            el3.css('border','1px solid #aaa');
            el3.next().text('');
        });

        let isPass = true;

        let creditRadio = document.getElementById('creditRadio');
        let arrivePayRadio = document.getElementById('arrivePayRadio');
        let deliveryRadio = document.getElementById('deliveryRadio');
            

        if(arrivePayRadio.checked == true){

            // console.log('arrivePay', 'checked');  

                //判斷宅配選項是否有選
                if (deliveryRadio.checked == true) {


                    if (reciver.val() == ""){
                        isPass = false;
                        $(reciver).css('border','1px solid red');
                        $(reciver).next().text('請輸入收件人姓名')
                    }
                    if (! mobile_re.test(phone.val())){
                        isPass = false;
                        $(phone).css('border','1px solid red');
                        $(phone).next().text('請填入正確的手機格式')
                    }
                    if (address.val() == ""){
                        isPass = false;
                        $(address).css('border','1px solid red');
                        $(address).next().text('請輸入收件地址')
                    }
                    if (isPass){
                    $('#orderbtn').attr('data-toggle', 'modal')
                    }

                }
                if (isPass){
                    $('#orderbtn').attr('data-toggle', 'modal');
                }      
        };


        if (creditRadio.checked == true) {

            // console.log('cradio', 'checked');

            //判斷宅配選項是否有選
            if (deliveryRadio.checked == true) {

                    if (reciver.val() == ""){
                        isPass = false;
                        $(reciver).css('border','1px solid red');
                        $(reciver).next().text('請輸入收件人姓名')
                    }
                    if (! mobile_re.test(phone.val())){
                        isPass = false;
                        $(phone).css('border','1px solid red');
                        $(phone).next().text('請填入正確的手機格式')
                    }
                    if (address.val() == ""){
                        isPass = false;
                        $(address).css('border','1px solid red');
                        $(address).next().text('請輸入收件地址')
                    }

                };

                

            if (cardnumP1.val() == "" || cardnumP1.val().length < 4) {
                isPass = false;
                $(cardnumP1).css('border','1px solid red');
                $(cardnumP1).parent().find('.form-text').text('卡號格式錯誤')
            }

            if (cardnumP2.val() == "" || cardnumP2.val().length < 4) {
                isPass = false;
                $(cardnumP2).css('border','1px solid red');
                $(cardnumP2).parent().find('.form-text').text('卡號格式錯誤')
                // alert("卡號格式錯誤");
                // return false;
            }
            if (cardnumP3.val() == "" || cardnumP3.val().length < 4) {
                isPass = false;
                $(cardnumP3).css('border','1px solid red');
                $(cardnumP3).parent().find('.form-text').text('卡號格式錯誤')
                // alert("卡號格式錯誤");
                // return false;
            }
            if (cardnumP4.val() == "" || cardnumP4.val().length < 4) {
                isPass = false;
                $(cardnumP4).css('border','1px solid red');
                $(cardnumP4).parent().find('.form-text').text('卡號格式錯誤')

                // alert("卡號格式錯誤");
                // return false;
            }             

            if (creditName.val() == "") {
                isPass = false;
                $(creditName).css('border','1px solid red');
                $(creditName).next().text('請輸入持卡人姓名')
            }

            if (cardSafeNum.val() == "" || cardSafeNum.val().length < 3) {
                isPass = false;
                $(cardSafeNum).css('border','1px solid red');
                $(cardSafeNum).next().text('請輸入正確的安全碼')
            }

            if (cardDateMM.val() == "" || cardDateMM.val().length < 2) {
                isPass = false;
                $(cardDateMM).css('border','1px solid red');
                $(cardDateMM).parent().find('.form-text').text('請輸入正確的到期日')
            }
            if (cardDateYY.val() == "" || cardDateYY.val().length < 2) {
                isPass = false;
                $(cardDateYY).css('border','1px solid red');
                $(cardDateYY).parent().find('.form-text').text('請輸入正確的到期日')
            }


            if (isPass) {
                $('#orderbtn').attr('data-toggle', 'modal')
            }
            

        };
    
         

        // let isPass = true;

        if(isPass){
            $.post(
                'test-api.php',
                $(document.form1).serialize(),
                function(data){
                    // if(data.success){
                    //     alert('訂單已送出');
                    // } else {
                    //     // console.log('資料沒有送出')
                    //     alert(data.error);
                    // }
                },
                'json'
            )
        }
    }

        


</script>
<?php include __DIR__ . '/connect_parts/html-foot.php' ?>