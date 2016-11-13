<?php
function reverse_number($number){

    $sum = 0;

    while( floor($number) ) {

        $newnum = $number % 10;
        $sum = ($sum * 10) + $newnum;

        $number = $number/10;
    }

    echo $sum;
}

echo reverse_number(123456789);