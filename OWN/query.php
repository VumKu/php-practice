<!-- 先設定完connect_db後(預設的pdo)，再來處理query的部分(pdo要連上的資料庫)。 -->


<?php

require __DIR__ . '/part-text/HTML/_connect_db.php';
//連上connect_db.php，裡面有pdo的語法規則($pdo 連線到資料庫的物件)，透過連線去下達SQL的指令(通常使用query指令)

$stmt = $pdo->query('SELECT * FROM address_book');
//query透過連線去執行sql的語法，獲得了$stmt(state代理物件)，並非拿到"結果"，因為是用select(裡面包含很多東西)

$row = $stmt->fetch();
//上面使用select，下面才能使用fetch，它取得一列結果列，以陣列或物件方式回傳

echo json_encode($row);


// 第12、15行的總結，可以用while圈寫

// while($row = $stmt->fetch()){
//     echo "{$row['sid']} {$row['name']}";
// }
