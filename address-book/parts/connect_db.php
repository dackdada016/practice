<?php
$db_host = 'localhost';
$db_name = 'mfee30';
// 如果不同port 就要新增 $db_port = '';
$db_user = 'root';
$db_pass = '';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
    
// data source name 等號後不可以有任何空白 ， 最後一個參數為編碼格式 用UTF-8
// 建立連線的方式 (連線資料，使用者，密碼)
$pdo = new PDO($dsn, $db_user, $db_pass,) ;

if(! isset($_SESSION)){
    session_start();
}