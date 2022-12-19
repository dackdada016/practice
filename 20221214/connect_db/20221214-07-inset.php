<?php
// sql_injection SQL隱碼攻擊
use function PHPSTORM_META\sql_injection_subst;

require './connect_db.php';

$sql = "INSERT INTO `address_book`(`name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES ( ?, ?, ?, ?, ?, NOW())";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    '陳小華',
    'avc@gmail.com',
    '456798',
    '1996-12-20',
    '高雄市'
]);
echo json_encode([
    'rowCount' => $stmt->rowCount(),
    'lastInsertId' => $pdo->lastInsertId(),
    // 最新增加的資料, 主鍵的值
]);
