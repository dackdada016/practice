<pre>
<?php

  $c = 5 || 7;
  $d = 5 && 0;

  $e = 5 or 7; // 優先權及比 等號設定 還低 
  $f = 5 and 0;

  $g = (5 or 7); // 加上()提升優先權 
  $h = (5 and 0);

  var_dump($c); // 查看變數的類型和值
  var_dump($d);
  var_dump($e);
  var_dump($f);
  var_dump($g);
  var_dump($h);

?>
</pre>