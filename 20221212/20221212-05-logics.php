<?php

  $a = true;
  $b = false;

  $c = 5 || 7;
  $d = 5 && 0;

  echo "---{$a}---<br>" ;
  echo "---{$b}---<br>" ; // php false 會 log 空字串

  var_dump($c); // 查看變數的類型和值
  echo '<br>';
  var_dump($d);
  echo '<br>';

?>