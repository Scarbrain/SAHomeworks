<?php
$a = 2;
$b = -5;
$c = 8;
//$numbers = array($a, $b, $c);
//rsort($numbers);
//echo $numbers[0];
//echo $numbers[1];
//echo $numbers[2];

if ($a>$b && $a>$c && $b>$c) {
    echo $a, $b, $c;
}
elseif ($a>$b && $a>$c && $b<$c) {
    echo $a, $c, $b;
}
elseif ($b>$a && $b>$c && $a<$c) {
    echo $b, $c, $a;
}
elseif ($b>$a && $b>$c && $a>$c) {
    echo $b, $a, $c;
}
elseif ($c>$a && $c>$b && $a<$b) {
    echo $c, $b, $a;
}
elseif ($c>$a && $c>$b && $a>$b) {
    echo $c, $a, $b;
}