<?php
require './connect_db.php';

$sql = "SELECT * FROM address_book LIMIT 10,5";
$rows = $pdo->query($sql)->fetchAll();
?>

<table>
    <?php foreach($rows as $r): ?>
    <tr>
        <td><?= $r['sid']?></td>
        <td><?= $r['name']?></td>
        <td><?= $r['email']?></td>
        <td><?= $r['mobile']?></td>
    </tr>
    <?php endforeach ?>
</table>