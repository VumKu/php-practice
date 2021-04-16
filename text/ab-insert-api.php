<?php include __DIR__ . '/part-text/HTML/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];

if (isset($_POST['name'])) {
    // TODO: 欄位資料檢查

    // 檢查手機號碼格式
    $mobile_re =
        "/^09\d{2}-?\d{3}-?\d{3}$/";
    if (empty(preg_grep($mobile_re, [$_POST['mobile']]))) {
        $output['error'] = '手機格式不正確';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;
    }

    $sql = "INSERT INTO `address_book`(
                            `name`,`email`,`mobile`,
                            `birthday`,`address`,`created_at`
                            ) VALUES(
                                ?,?,?,
                                ?,?,NOW()
                            )";
    // INSERT INTO : 新增資料至某資料表

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['mobile'],
        $_POST['birthday'],
        $_POST['address'],
    ]);

    if ($stmt->rowCount()) {
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '新增資料發生錯誤';
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
