<?php
#include './connect_db.php';
//  相當於貼上這支PHP
// 錯誤的時候會提醒 但會繼續執行php(錯誤等級較低)

// require 錯誤時不會繼續執行php，直接報錯
require './connect_db.php';

$sql = "SELECT * FROM address_book LIMIT 5,5 ";
// 執行SELECT時 會轉成代理物件回傳
$stmt = $pdo->query($sql);
// 取得搜尋所有的值
$row = $stmt->fetchALL();
// 會回傳兩組 一組為索引式陣列，另一組是關聯式陣列
// $row = $stmt->fetch(PDO::FETCH_BOTH; 預設值
// $row = $stmt->fetch(PDO::FETCH_ASSOC); #關聯式
// $row = $stmt->fetch(PDO::FETCH_NUM); #索引式
// 將代理物件轉換成JSON格式
// 設定檔頭為JSON
header('Content-Type: application/json');
echo json_encode($row,JSON_UNESCAPED_UNICODE);