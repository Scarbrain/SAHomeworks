<?php
$a = 2;
$b = 3;
$c = 9;
$d = 5;
$e = 6;
$biggest = $a;

if ($b>$biggest) {
    $biggest = $b;
}
if ($c>$biggest) {
    $biggest = $c;
}
if ($d>$biggest) {
    $biggest = $d;
}
if ($e>$biggest) {
    $biggest = $e;
}
echo $biggest;