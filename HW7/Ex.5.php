<?php
$a = 3;
$b = 7;
$c = 4;
$biggest = $a;

if ($b>$biggest) {
    $biggest = $b;
}
if ($c>$biggest) {
    $biggest = $c;
}

echo $biggest;