<pre>
<?php
    $ar1 = [
        'name' => 'Devid',
        'age' => 25,
    ];
    
    $ar2 = $ar1; #陣列設定複製以後設定
    $ar3 = &$ar1; #設定位址(設定參照)

    $ar1['age'] = 18;

    print_r($ar2);
    print_r($ar3);

    ?>
</pre>