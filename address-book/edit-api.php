<?php
require './admin-required-api.php';
require './parts/connect_db.php';
header('Content-Type: application/json');

$output = [
  'success' => false,
  'postData' => $_POST,
  'code' => 0,
  'errors' => []
];

if(empty($_POST['sid'])) {
  $output['errors']['sid'] = '沒有資料編號';
  echo json_encode($output, JSON_UNESCAPED_UNICODE);
  exit;
}

if(empty($_POST['name'])) {
  $output['errors']['name'] = '沒有姓名資料';
  echo json_encode($output, JSON_UNESCAPED_UNICODE);
  exit;
}

// TODO: 欄位資料檢查

$isPass = true; // 是否通過檢查

$sid = intval($_POST['sid']);

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$birthday = $_POST['birthday'] ?? '';
$address = $_POST['address'] ?? '';



if(mb_strlen($name ) < 2){
  $output['errors']['name'] = '請填寫正確的姓名';
  $isPass = false;
}

if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
  $output['errors']['email'] = '請填寫正確的 email';
  $isPass = false;
}


$sql = "UPDATE `address_book` SET
`name`=?,
`email`=?,
`mobile`=?,
`birthday`=?,
`address`=?
WHERE `sid`=?";

$stmt = $pdo->prepare($sql);


if(!empty($_POST['birthday'])){
  $t = strtotime($_POST['birthday']);
  if($t!==false){
    $birthday = date('Y-m-d', $t);
  }
}
if(empty($birthday)){
  $birthday = null;
}
if($isPass) {
  $stmt->execute([
    $name,
    $email,
    $mobile,
    $birthday,
    $address,
    $sid
  ]);
  
  $output['success'] = !! $stmt->rowCount();
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);
