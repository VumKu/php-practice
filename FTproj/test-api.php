<?php include __DIR__ . '/connect_parts/config.php'; 

// exit;

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];

// $_POST = [
//     'order_id' => 
// ];

// $order_id = $_GET['order_id'];
// echo $order_id;

// exit;



//訂單編號取日期的規則
// $order_id = date("YmdHis").substr(microtime(),2,4);
// $output['order_id'] = $order_id;


if(isset($_POST['shipment_method']) ){

    $pdc_total = 0;
    foreach($_SESSION['cart']['products'] as $i) {
        $pdc_total += $i['price'] * $i['qty'];
    }
    $trip_total = 0;
    foreach($_SESSION['cart']['trip'] as $j) {
        $trip_total += $j['price'] * $j['qty'];
    }
    $lit_total = 0;
    foreach($_SESSION['cart']['light'] as $k) {
        $lit_total += $k['price'] * $k['qty'];
    }
    
    $product_totalPrice = $pdc_total + $trip_total + $lit_total;

    // var_dump($_POST);

    $_POST['order_id'] = $_SESSION['cart']['order_id'];

//測試用
// $product_totalPrice = 900;
$shipment_fee = 60;
$order_totalPrice = $product_totalPrice + $shipment_fee;

//order_sum
$o_sql = "INSERT INTO `order_sum`(
    `order_id`, `member_sid`, `shipment_method`, `shipment_shipName`,
    `shipment_address`, `shipment_reciver`, `shipment_reciver_phone`, 
    `payment_method`, `product_totalPrice`, `shipment_fee`, 
    `order_totalPrice`, `order_time`
) VALUES (
    ?, ?, ?, ?,
    ?, ?, ?,
    ?, ?, ?,
    ?, NOW()
)";

$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([

$_POST['order_id'], //order_id
$_SESSION['user']['id'], //member_sid
$_POST['shipment_method'],
$_POST['shipment_shipName'],
$_POST['shipment_address'],
$_POST['shipment_reciver'],
$_POST['shipment_reciver_phone'],
$_POST['payment_method'],
$product_totalPrice,
$shipment_fee,
$order_totalPrice
]);

if($o_stmt->rowCount()){
    $output['success'] = true;
    $output['error'] = '';
} else {
    $output['error'] = '新增資料發生錯誤';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);



//orders_pdc
$sum_id_p = $pdo->lastInsertId();

$op_sql = "INSERT INTO `orders_pdc`(
    `member_sid`, `pdc_sid`, 
    `pdc_qty`, `pdc_price`, `sum_id`
) VALUES (
        ?, ?,
        ?, ?, ?
)";

$op_stmt = $pdo->prepare($op_sql);

foreach($_SESSION['cart']['products'] as $p) {
$op_stmt->execute([

$_SESSION['user']['id'], 
$p['sid'], 
$p['qty'],
$p['price'],
$sum_id_p
]);
};


//orders_trip
$ot_sql = "INSERT INTO `orders_trip`(
                `member_sid`, `trip_sid`, 
                `trip_qty`, `trip_price`, `trip_plan`, 
                `trip_date`, `sum_id`
                ) VALUES(
                ?, ?,
                ?, ?, ?,
                ?, ?
        )";

$ot_stmt = $pdo->prepare($ot_sql);

foreach($_SESSION['cart']['trip'] as $t) {
$ot_stmt->execute([

$_SESSION['user']['id'], 
$t['sid'], 
$t['qty'],
$t['price'],
$t['attr'],
$t['date'],
$sum_id_p
]);
};


//orders_light
$ol_sql = "INSERT INTO `orders_lit`(
            `member_sid`, `lit_sid`, 
            `lit_qty`, `lit_price`, `sum_id`
            ) VALUES (
            ?, ?,
            ?, ?, ?
        )";

$ol_stmt = $pdo->prepare($ol_sql);

foreach($_SESSION['cart']['light'] as $l) {
$ol_stmt->execute([

$_SESSION['user']['id'], 
$l['sid'], 
$l['qty'],
$l['price'],
$sum_id_p
]);
};

//orders_light_detail
// $oldt_sid = $pdo->lastInsertId();

$oldt_sql = "INSERT INTO `order_lit_details`(
                    `lit_sid`, `bless_name`, 
                    `bless_gender`, `bless_birth`, `bless_address`, 
                    `sum_id`
                    ) VALUES (
                ?, ?,
                ?, ?, ?,
                ?
            )";

$oldt_stmt = $pdo->prepare($oldt_sql);

foreach($_SESSION['cart']['light'] as $l) {
$oldt_stmt->execute([

$l['sid'],
$l['attr']['name'], 
$l['attr']['gender'],
$l['attr']['birth'],
$l['attr']['address'],
$sum_id_p
]);
};



}

