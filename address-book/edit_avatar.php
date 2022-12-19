<?php
require './parts/connect_db.php';



?>
<?php include './parts/html-head.php' ?>
<?php include './parts/navbar.php' ?>
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="card">
        <img src="./../uploads/<?= empty($_SESSION['admin']['avatar']) ? '_default.png' : $_SESSION['admin']['avatar'] ?>" class="card-img-top" alt="...">
        <div class="card-body">

          <button class="btn btn-primary">上傳</button>
          <button class="btn btn-danger">確定</button>
          <button class="btn btn-warning">取消</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include './parts/scripts.php' ?>
<?php include './parts/html-foot.php' ?>