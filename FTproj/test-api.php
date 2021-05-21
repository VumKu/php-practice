<?php include __DIR__ . '/connect_parts/config.php'; 

// exit;

// $output = [
//     'success' => false,
//     'code' => 0,
//     'error' => '資料沒有新增'
// ];

$order_id = $_POST['order_id'];
echo $order_id;

exit;




if(isset ($_POST['order_id']) ){

// $product_totalPrice = 900;
// $shipment_fee = 60;
// $order_totalPrice = 960;



//order_sum
$o_sql = "INSERT INTO `order_sum`(
    `order_id`, `member_sid`, `shipment_method`, `shipment_shipName`,
    `shipment_address`, `shipment_reciver`, `shipment_reciver_phone`, 
    `payment_method`, `product_totalPrice`, `shipment_fee`, 
    `order_totalPrice`, `order_time`
) VALUES (
    NULL, ?, ?, ?,
    ?, ?, ?,
    ?, ?, ?,
    ?, NOW()
)";

$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
// $_SESSION['user']['id'], //member_sid
$_POST['shipment_method'],
$_POST['shipment_shipName'],
$_POST['shipment_address'],
$_POST['shipment_reciver'],
$_POST['shipment_reciver_phone'],
$_POST['payment_method'],
// $product_totalPrice,
// $shipment_fee,
// $order_totalPrice
]);


//orders_pdc
// $sum_id = $pdo->lastInsertId();

// $op_sql = "INSERT INTO `orders_pdc`(
//     `sid`, `member_sid`, `pdc_sid`, 
//     `pdc_qty`, `pdc_price`, `sum_id`
// ) VALUES (
//         NULL, ?, ?,
//         ?, ?, ?
// )";

// $op_stmt = $pdo->prepare($op_sql);

// foreach($_GET['.checkList_itemWordBox'] as $c) {
// $op_stmt->execute([
// $_SESSION['user']['id'], 
// $c['.checkList_itemName'], 
// $c['data-price'],
// $c['data-qty'],
// $sum_id
// ]);
// };



}

