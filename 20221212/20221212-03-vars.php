<?php

  $age = 12;
  $b = '5';
  $c = 'ccc';
  echo $age + $b .'<br>'; // . 字串串接
  // echo $age + $c .'<br>'; // 整數不能加字串
  echo $age + intval($c) . '<br>'; // 把字串轉換為整數

  /*
  * php的錯誤型態
  * 1.Error
  * 2.Warning
  * 3.Notice 
  */
  ?>