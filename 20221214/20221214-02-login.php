<?php
    session_start();
    // 啟用session功能
    $users = [
        'shin' => [
          'pwd' => '1234',
          'nickname' => '欣'  
        ],
        'yun' =>[
            'pwd' => '123',
            'nickname' => '芸'
        ]
    ];
    // empty 可以判斷是否為空值 空字串 空陣列 =>回傳Ture

    if(! empty($_POST)){
        // 如果用戶端有傳送表單資料出來
        $error_msg = '欄位錯誤';
        // 並且兩欄都有值
        if(! empty($_POST['account']) and ! empty($_POST['password'])){
            $error_msg = '帳密錯誤1';
            // 帳號是對的
            if(! empty($users[$_POST['account']])){
                $error_msg = '帳密錯誤2';
                $user = $users[$_POST['account']];
                // 密碼也是對的
                if($_POST['password']===$user['pwd']){
                    $error_msg = '';
                    // session 儲存
                    $_SESSION['user'] = [
                        'account' => $_POST['account'],
                        'nickname' => $user['nickname'],
                    ];
                }
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php if(isset($_SESSION['user'])) : ?>
    <h2><?= $_SESSION['user']['nickname'] ?> Hello</h2>
    <div><a href="20221214-03-logout.php">登出</a></div>
    <?php else :?>
        <?php if(! empty($error_msg)): ?>
            <div class="alert alert-danger" role="alert">
                帳號密碼錯誤
            </div>
        <?php endif ?>
    <form name="form1" method="post" class="m-1">
        <input type="text" name="account" value="<?= isset($_POST['account']) ? htmlentities($_POST['account']) : '' ?>">
        <br>
        <input type="password" name="password" value="<?= isset($_POST['password']) ? htmlentities($_POST['password']) : '' ?>" >
        <br>
        <input type="submit">
    </form>
    <?php endif ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    const myAlert = $('.alert.alert-danger');
    if (myAlert.length) {
      setTimeout(() => {
        myAlert.slideUp();
      }, 2000);
    }
  </script>
</body>
</html>