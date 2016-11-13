<?php
function maxNum($a, $b) {
    $max = $a;
    if ($b>$max) {
        $max = $b;
    }
    echo $max;
}

maxNum(7, 6);