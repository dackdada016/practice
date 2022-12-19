<?php

header('Content-Type: text/plain');

$start = strtotime('1995-01-01');
$end = strtotime('2005-01-01');

for($i=0;$i<20;$i++){
    $t = rand($start,$end);
    echo date("Y-m-d", $t) . "\n";
};

