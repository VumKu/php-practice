<?php

require __DIR__ . '/part-text/HTML/_connect_db.php';

$stmt = $pdo->query('SELECT * FROM address_book');

$row = $stmt->fetch();

echo json_encode($row);
