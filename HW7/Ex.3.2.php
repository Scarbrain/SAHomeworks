<?php
function factorial($n) {
    $factN = 1;
    for ($i=1; $i<=$n; $i++) {
        $factN *= $i;
    }
    echo $factN;
}

factorial(5);