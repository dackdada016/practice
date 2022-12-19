<pre>
    <?php
    for($i=1; $i<=42; $i++){
        $ar[] = $i;
    }
    // 陣列字串串接
    echo implode(':',$ar);
    echo '<br>';
    // 切割陣列字串
    // echo explode() 

    // 取數值範圍當陣列元素
    $ar2 = range(1,30);
    // 奇數範圍
    // $ar2 = range(1, 30, 2);
    // 隨機排序
    shuffle($ar2);
    echo implode(':', $ar2);
    
    ?>
</pre>

.find
.filter
.map
.reduce