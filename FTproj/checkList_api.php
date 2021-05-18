<?php include __DIR__ . '/connect_parts/config.php'; 


//計算product_totalPrice
$pro_total = 0;
foreach($_SESSION['cart']['product'] as $i) {
    $pro_total += $i['price'] * $i['quantity'];
}
$plan_total = 0;
foreach($_SESSION['cart']['plan'] as $j) {
    $plan_total += $j['price'] * $j['quantity'];
}
$l_total = 0;
foreach($_SESSION['cart']['light'] as $k) {
    $l_total += $k['price'] * $k['quantity'];
}

$product_totalPrice = $pro_total + $pla_total + $l_total;




//計算運費(還沒寫好)
$shipment_fee;

$order_totalPrice = $product_totalPrice + $shipment_fee;




    $o_sql = "INSERT INTO `output_order_info`(
                    `order_id`, `member_sid`,`shipment_method`, 
                    `shipment_address`, `shipment_reciver`, `shipment_reciver_phone`, 
                    `payment_method`, `product_totalPrice`, `shipment_fee`,
                    `order_totalPrice`,`order_time`
                    ) VALUES(
                        NULL, ?, ?,
                        ?, ?, ?,
                        ?, ?, ?,
                        ?, NOW()
                    
                    )";

    $o_stmt = $pdo->prepare($o_sql);
    $o_stmt->execute([
        $_SESSION['user']['id'], //member_sid
        $_POST['shipment_method'],
        $_POST['shipment_address'],
        $_POST['shipment_reciver'],
        $_POST['shipment_reciver_phone'],
        $_POST['payment_method'],
        $product_totalPrice,
        $shipment_fee,
        $order_totalPrice
    ]);


    $order_id = $pdo->lastInsertId();

    $d_sql = "INSERT INTO `output_order_product`(
                        `order_id`,`product_id`, 
                        `product_name`, `product_num`, `product_price`
                        ) VALUES (
                            NULL, ?,
                            ?, ?, ?
                        )";

    $d_stmt = $pdo->prepare($d_sql);

    foreach($_SESSION['cart'] as $c) {
        $d_stmt->execute([
            $order_id,
            $c['product_category'], //資料表內無類別這項
            $c['product_id'], //...?
            $c['product_name'],
            $c['product_num'],
            $c['product_price']
        ]);

    };
    
    unset($_SESSION['cart']); //送出後清空購物車

?>
