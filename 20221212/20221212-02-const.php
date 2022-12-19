<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo 12 + 13;
    echo '<br>';
    echo 12 + 13;
    echo __DIR__;  // 這支PHP所在的資料夾(磁碟路徑)
    echo '<br>';
    echo __FILE__; // 檔案的路徑包含檔名
    echo '<br>';
    echo __LINE__; // 第幾列
    echo '<br>';
    ?>
</body>

</html>