<?php include __DIR__ . '/connect_parts/config.php'; ?>

<?php

$title = '灣廟 | 結帳確認';
$pageName = 'check_list & payment method';

// if (!isset($_SESSION['cart'])) {
//     $_SESSION['cart'] = [];
// }

// session_start();





?>


<?php include __DIR__ . '/connect_parts/checkList/checkList_htmlHead.php' ?>
<?php include __DIR__ . '/connect_parts/navbar2.php' ?>



<div class="checkListContainer">
    <div class="checkList_title">結帳</div>

    <div class="checkList_prod_cate">
        <div class="checkList_prod_cateBox">
            <p>商品名稱</p>
            <p>選項</p>
            <p>單價</p>
            <p>數量</p>
            <p>總價</p>
        </div>
    </div>

    <div class="checkList_itemContainer">

        <!-- product -->
        <?php foreach ($_SESSION['cart']['product'] as $i) : ?>
            <div class="checkList_item">
                <div class="checkList_itemImgBox">
                    <img src="./img/indexproduct(2).jpg" alt="">
                </div>
                <div class="checkList_itemWordBox">
                    <p class="checkList_itemName"><?= $i['name'] ?></p>
                    <p class="checkList_itemAttr"><?= $i['attr'] ?></p>
                    <p class="checkList_itemPrice">NT. <?= $i['price'] ?></p>
                    <p class="checkList_itemNum"><?= $i['qty'] ?></p>
                    <p class="checkList_itemTotalP">NT. <?= $i['price'] * $i['qty'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Trip -->
        <?php foreach ($_SESSION['cart']['plan'] as $j) : ?>
            <div class="checkList_item">
                <div class="checkList_itemImgBox">
                    <img src="./img/indexproduct(2).jpg" alt="">
                </div>
                <div class="checkList_itemWordBox">
                    <p class="checkList_itemName"><?= $j['name'] ?></p>
                    <p class="checkList_itemAttr"><?= $j['attr'] ?></p>
                    <p class="checkList_itemPrice">NT. <?= $j['price'] ?></p>
                    <p class="checkList_itemNum"><?= $j['qty'] ?></p>
                    <p class="checkList_itemTotalP">NT. <?= $j['price'] * $j['qty'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- light -->
        <?php foreach ($_SESSION['cart']['light'] as $k) : ?>
            <div class="checkList_item">
                <div class="checkList_itemImgBox">
                    <img src="./img/indexproduct(2).jpg" alt="">
                </div>
                <div class="checkList_itemWordBox">
                    <p class="checkList_itemName"><?= $k['name'] ?></p>
                    <p class="checkList_itemAttr"><?= $k['attr'] ?></p>
                    <p class="checkList_itemPrice">NT. <?= $k['price'] ?></p>
                    <p class="checkList_itemNum"><?= $k['qty'] ?></p>
                    <p class="checkList_itemTotalP">NT. <?= $k['price'] * $k['qty'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="checkList_deliverBox">
        <div class="checkList_subTitle">寄送方式</div>
        <div class="checkList_info">選擇寄送方式</div>

        <div class="checkList_deliverContent">
            <div class="checkList_deliver_cho">
                <div class="checkList_deliver_choName">
                    <label class="checkList_shopChoName">
                        <input type="radio" name="deliver" value="7-11" checked> 711
                    </label>
                    <p>+ NT. 60</p>
                </div>

                <div class="checkList_dliver_choInfo checkList_choInfo">
                    <div class="checkList_dliver_choInfoDetail">
                        <label class="shopName">
                            <input type="radio" name="shopAddress" value="某某門市" class="shopAddress_radio"> 某某門市
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
                        <input type="radio" name="deliver" value="familyMart"> 全家
                    </label>
                    <p>+ NT. 60</p>
                </div>

                <div class="checkList_dliver_choInfo checkList_choInfo">
                    <div class="checkList_dliver_choInfoDetail">
                        <label class="shopName">
                            <input type="radio" name="shopAddress" value="某某門市" class="shopAddress_radio"> 某某門市
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
                        <input type="radio" name="deliver" value="hiLife"> 萊爾富
                    </label>
                    <p>+ NT. 60</p>
                </div>

                <div class="checkList_dliver_choInfo checkList_choInfo">
                    <div class="checkList_dliver_choInfoDetail">
                        <label class="shopName">
                            <input type="radio" name="shopAddress" value="某某門市" class="shopAddress_radio"> 某某門市
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
                        <input type="radio" name="deliver" value=""> 宅配
                    </label>
                    <p>+ NT. 100</p>
                </div>

                <div class="checkList_dliver_choInfo checkList_choInfo">
                    <form>
                        <input type="text" name="name" placeholder="地址" size="30">
                        <br>
                        <input type="text" name="phone" placeholder="收件人">
                        <input type="text" name="address" placeholder="聯絡電話">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="checkList_payBox">
        <div class="checkList_subTitle">付款方式</div>
        <div class="checkList_info">選擇付款方式</div>

        <div class="checkList_payContent">
            <div class="checkList_pay_cho">
                <label class="checkList_payMethod"><input type="radio" name="pay" value="bysent" checked>
                    貨到付款</label>
            </div>

            <div class="checkList_pay_cho">
                <label class="checkList_payMethod"><input type="radio" name="pay" value="bycredit" id="creditRadio"> 信用卡 / 金融卡</label>

                <div class="checkList_pay_choInfo checkList_choInfo">
                    <p class="checkList_importment">*為必填</p>
                    <form class="creditForm">
                        <label>*請輸入卡號:
                            <input class="cardNum" type="text" name="cardnum-p1" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                            <input class="cardNum" type="text" name="cardnum-p2" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                            <input class="cardNum" type="text" name="cardnum-p3" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                            <input class="cardNum" type="text" name="cardnum-p4" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">
                        </label>
                        <br />
                        <label>*持卡人姓名:
                            <input class="cardName" type="text" name="cardName">
                        </label>
                        <br />
                        <label>*安全碼:
                            <input class="cardSafeNum" type="text" name="cardSafeNum" maxlength="3" size="3" oninput="value=value.replace(/[^\d]/g,'')">
                        </label>
                        <br />
                        <label>*到期日:
                            <input class="cardDate" type="text" name="cardDate" maxlength="2" size="2" oninput="value=value.replace(/[^\d]/g,'')"> /
                            <input class="cardDate" type="text" name="cardDate" maxlength="2" size="2" oninput="value=value.replace(/[^\d]/g,'')">
                        </label>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="checkList_totalPriceContainer">
        <div class="checkList_subTitle">訂單金額</div>
        <div class="checkList_totalPricInfo">
            <div class="checkList_totalPricInfoBox">
                <p>商品金額</p>
                <p>NT. 1125</p>
            </div>

            <div class="checkList_totalPricInfoBox">
                <p>運費金額</p>
                <p>NT. 60</p>
            </div>

            <div class="checkList_totalPricInfoBox">
                <p>訂單總金額</p>
                <p>NT. 1185</p>
            </div>
        </div>
    </div>

    <div class="checkList_finBtn">
        <button class="checkList_btn" data-target="#finishOrder" id="orderbtn" onclick="requireData()">確認下訂</button>
    </div>

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
                    <span>TC0033333333333301</span>
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
    let cart = <?= $_SESSION['cart']['product']; ?>;
    console.log('購物車內容:', cart);
</script>
<?php include __DIR__ . '/connect_parts/html-foot.php' ?>