<?php include __DIR__ . '/connect_parts/config.php'; 


//計算商品總金額
$pdc_total = 0;
foreach($_SESSION['cart']['product'] as $i) {
    $pdc_total += $i['price'] * $i['quantity'];
}
$trip_total = 0;
foreach($_SESSION['cart']['plan'] as $j) {
    $trip_total += $j['price'] * $j['quantity'];
}
$lit_total = 0;
foreach($_SESSION['cart']['light'] as $k) {
    $lit_total += $k['price'] * $k['quantity'];
}

$product_totalPrice = $pdc_total + $trip_total + $lit_total;




//計算運費(還沒寫好)
// $shipment_fee;

// $order_totalPrice = $product_totalPrice + $shipment_fee;



    //order_sum
    $o_sql = "INSERT INTO `order_sum`(
                        `order_id`, `member_sid`, `shipment_method`, 
                        `shipment_address`, `shipment_reciver`, `shipment_reciver_phone`, 
                        `payment_method`, `product_totalPrice`, `shipment_fee`, 
                        `order_totalPrice`, `order_time`
                    ) VALUES (
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


    //orders_pdc
    $sum_id = $pdo->lastInsertId();

    $op_sql = "INSERT INTO `orders_pdc`(
                        `sid`, `member_sid`, `pdc_sid`, 
                        `pdc_qty`, `pdc_price`, `sum_id`
                    ) VALUES (
                            NULL, ?, ?,
                            ?, ?, ?
                    )";

    $op_stmt = $pdo->prepare($op_sql);

    foreach($_SESSION['cart'] as $c) {
        $op_stmt->execute([
            $_SESSION['user']['id'], 
            $c['pdc_sid'], 
            $c['pdc_qty'], 
            $c['pdc_price'],
            $sum_id
        ]);
    };

    //orders_trip
    $sum_id = $pdo->lastInsertId(); //?怎麼連

    $ot_sql = "INSERT INTO `orders_trip`(
                        `sid`, `member_sid`, `trip_sid`, 
                        `trip_qty`, `trip_price`, `trip_plan`, 
                        `trip_date`, `sum_id`
                    ) VALUES (
                            NULL, ?, ?,
                            ?, ?, ?,
                            ?, ?
                    )";

    $ot_stmt = $pdo->prepare($ot_sql);

    foreach($_SESSION['cart'] as $c) {
        $ot_stmt->execute([
            $_SESSION['user']['id'], 
            $c['trip_sid'], 
            $c['trip_qty'], 
            $c['trip_price'],
            $c['trip_plan'],
            $c['trip_date'],
            $sum_id
        ]);
    };

    //orders_lit
    $sum_id = $pdo->lastInsertId(); //?怎麼連

    $ol_sql = "INSERT INTO `orders_lit`(
                        `sid`, `member_sid`, `lit_sid`, 
                        `lit_qty`, `lit_price`, `sum_id`
                    ) VALUES (
                            NULL, ?, ?,
                            ?, ?, ?
                    )";

    $ol_stmt = $pdo->prepare($ol_sql);

    foreach($_SESSION['cart'] as $c) {
        $ol_stmt->execute([
            $_SESSION['user']['id'], 
            $c['lit_sid'], 
            $c['lit_qty'], 
            $c['lit_price'],
            $sum_id
        ]);
    };




    
    unset($_SESSION['cart']); //送出後清空購物車

?>
