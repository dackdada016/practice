<?php
require './parts/connect_db.php';

$account = 'shin';
$password = '123456';

$hash = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO `admins`(`account`, `password_hash`) 
VALUES ('{$account}', '{$hash}')";

try {
  echo $pdo->query($sql)->rowCount();

  echo "A~<br>";
} catch(PDOException $ex) {
  echo "B~<br>";
  echo $ex->getMessage();
}
echo "C~<br>";