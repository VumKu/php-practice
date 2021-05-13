<?php include __DIR__ . '/part-text/HTML/config.php'; ?>
<?php

$title = '感謝購買';
$pageName = 'cart-confirm';

if (

    !isset($_SESSION['user'])
    or
    empty($_SESSION['cart'])
) {
    header('Location: product-list.php');
    exit;
}

$total = 0;
foreach ($_SESSION['cart'] as $v) {
    $total += $v['price'] * $v['quantity'];
}

$o_sql = "INSERT INTO `orders`
    (`member_sid`, `amount`, `order_date`)
     VALUES
    (N?, ?, NOW() )";
$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
    $_SESSION['user']['id'],
    $total,
]);

// echo $pdo->lastInsertId();
$order_sid = $pdo->lastInsertID();

$d_sql = "INSERT INTO `order_details`
(`order_sid`, `product_sid`, `price`, `quantity`)
 VALUES 
(?, ?, ?, ?)";
$d_stmt = $pdo->prepare($d_sql);

foreach ($_SESSION['cart'] as $v) {
    $d_stmt->execute([
        $order_sid,
        $v['sid'],
        $v['price'],
        $v['quantity'],
    ]);
}

unset($_SESSION['cart']);  // 清除購物車

?>

<?php include __DIR__ . '/part-text/HTML/html-head.php'; ?>
<?php include __DIR__ . '/part-text/HTML/navbar.php'; ?>

<div class="container">

    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
                感謝訂購
            </div>
        </div>
    </div>


</div>
<?php include __DIR__ . '/part-text/HTML/scripts.php'; ?>

<?php include __DIR__ . '/part-text/HTML/html-foot.php'; ?>