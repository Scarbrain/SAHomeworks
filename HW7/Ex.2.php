<?php
$score = 5;

if (0<=$score && $score<=3) {
    $score = $score * 10;
    echo $score;
}
elseif (4<=$score && $score<=6) {
    $score = $score * 15;
    echo $score;
}
elseif (7<=$score && $score<=9) {
    $score = $score * 20;
    echo $score;
}
elseif ($score>10) {
    $score = $score * 100;
    echo $score;
}
elseif ($score<0) {
    echo 'Invalid Score';
}

