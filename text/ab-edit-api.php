<?php include __DIR__ . '/part-text/HTML/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有修改'
];

if (isset($_POST['sid']) and isset($_POST['name'])) {
    // TODO: 欄位資料檢查

    // 檢查手機號碼格式
    $mobile_re =
        "/^09\d{2}-?\d{3}-?\d{3}$/";
    if (empty(preg_grep($mobile_re, [$_POST['mobile']]))) {
        $output['error'] = '手機格式不正確';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;
    }

    $sql = "UPDATE `address_book` SET 
                    `name`=?,
                    `email`=?,
                    `mobile`=?,
                    `birthday`=?,
                    `address`=?
            WHERE `sid`=? ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['mobile'],
        $_POST['birthday'],
        $_POST['address'],
        $_POST['sid'],
    ]);

    if ($stmt->rowCount()) {
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '資料沒有修改';
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
