<?php

$n = 5;
$x = -4;


$fact = 1;
$del = 1;
$result = 1;

for ($i = 1; $i <= $n; $i++) {
    $fact *= $i;
    //echo $fact;
    $del = $del * $x;
    //echo $del;
    $result += $fact / $del;

}

echo $result;

