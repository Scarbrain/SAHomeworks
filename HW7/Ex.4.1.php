<?php
//$n = 0;
//$k = 0;

$n = 5;
$factN = 1;
for ($i=1; $i<=$n; $i++) {
    $factN *= $i;
}
//echo $factN;

$k = 2;
$factK = 1;
for ($i=1; $i<=$k; $i++) {
    $factK *= $i;
}
//echo $factK;

$result = $factN/$factK;
echo $result;