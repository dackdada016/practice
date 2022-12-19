<?php
require './parts/connect_db.php';
$pageName = 'list';
$title = "資料列表";

$perPage = 20;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) {
  header('Location: ?page=1');
  exit;
}

$t_sql = "SELECT COUNT(1) FROM address_book";
// 總筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];
// 如果有資料的話
if (!empty($totalRows)) {
  if ($page > $totalPages) {
    // 頁碼超出範圍時, 轉向到最後一頁
    header('Location: ?page=' . $totalPages);
    exit;
  }

  $sql = sprintf(
    "SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s",
    ($page - 1) * $perPage,
    $perPage
  );
  $rows = $pdo->query($sql)->fetchAll();
}






?>
<?php include './parts/html-head.php' ?>
<?php include './parts/navbar.php' ?>
<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?= $page - 1 ?>"><i class="fa-solid fa-circle-arrow-left"></i></a>
          </li>

          <?php for ($i = $page - 5; $i <= $page + 5; $i++) :
            if ($i >= 1 and $i <= $totalPages) :
          ?>
              <li class="page-item <?= $i == $page ? 'active' : '' ?> ">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
              </li>
          <?php endif;
          endfor; ?>

          <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
            <a class="page-link" href="?page=<?= $page + 1 ?>"><i class="fa-solid fa-circle-arrow-right"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col"><i class="fa-solid fa-trash-can"></i></th>
            <th scope="col">#</th>
            <th scope="col">姓名</th>
            <th scope="col">電郵</th>
            <th scope="col">手機</th>
            <th scope="col">生日</th>
            <th scope="col">地址</th>
            <th scope="col"><i class="fa-solid fa-file-pen"></i></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r) : ?>
            <tr>
              <td>
                <a href="javascript:" >
                  <i class="fa-solid fa-trash-can"></i>
                </a>
              </td>
              <td><?= $r['sid'] ?></td>
              <td><?= $r['name'] ?></td>
              <td><?= $r['email'] ?></td>
              <td><?= $r['mobile'] ?></td>
              <td><?= $r['birthday'] ?></td>
              <td><?= $r['address'] ?></td>
              <td>
                <a href="edit.php?sid=<?= $r['sid'] ?>">
                  <i class="fa-solid fa-file-pen"></i>
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>

      </table>

    </div>
  </div>
</div>
<?php include './parts/scripts.php' ?>
<script>
  const tbody = document.querySelector('tbody');
  tbody.addEventListener('click', event=>{
    const trash = event.target;
    /*
    if(trash.className==='fa-solid fa-trash-can'){
      trash.closest('tr').remove();
    }
    */
    if(trash.classList.contains('fa-trash-can')){
      trash.closest('tr').remove();
    }

  });
</script>
<?php include './parts/html-foot.php' ?>