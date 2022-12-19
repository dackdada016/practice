<?php

header('Content-Type: application/json');

$success = false;
$error = '';
if(! empty($_FILES['avatar']) and is_string($_FILES['avatar']['name'])){

  if(move_uploaded_file(
    $_FILES['avatar']['tmp_name'],
    './../uploads/'. $_FILES['avatar']['name']
  )){
    $success = true;
  } else {
    $error = '無法搬移檔案';
  }

}


echo json_encode([
  'success' => $success,
  'error' => $error,
  'FILES' => $_FILES
]);
