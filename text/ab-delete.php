<?php include __DIR__ . '/part-text/HTML/config.php';

$sid = intval($_GET['sid']);

$come_from = $_SERVER['HTTP_REFERER'] ?? 'ab-list.php';

if (!empty($sid)) {
    $sql = "DELETE FROM `address_book` where `sid`=$sid";
    $pdo->query($sql);
}

header('Location: ' . $come_from);
