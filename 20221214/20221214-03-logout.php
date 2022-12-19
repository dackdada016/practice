<?php
    session_start();
    // 啟用session功能

    //  $_SESSION_destory(); 所有的session都刪掉

    unset($_SESSION['user']); 
    // 刪掉陣列裡的元素

    header('Location:20221214-02-login.php');
    // redirect 轉向到別的頁面