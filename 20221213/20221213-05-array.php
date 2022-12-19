<pre>
    <?php
    $ar1 = array(2, 4, 6); #舊語法
    $ar2 = [1, 2, 3];
    #echo $ary2; //報錯 不要直接輸出陣列
    print_r($ar2);
    var_dump($ar2);

    $ar3 = array(
        'name' => 'Devid',
        'age' => 25,
    );
    #索引式陣列
    $ar4 = [
        'name' => 'Devid',
        'age' => 25,
    ];
    print_r($ar4);

    $ar5 = [
        'hello',
        'name' => 'Devid',
        'age' => 25,
        'world',
    ];
    print_r($ar5);

    ?>
</pre>