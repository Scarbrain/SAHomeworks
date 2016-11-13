<?php

//for ($i=0; $i<1000; $i++)
$numbers = range(0,1000);
    foreach ($numbers as &$number) {
        //echo $number;
        if (($number % 3)!=0 && ($number % 5)!=0) {
            echo $number . '<br/>';
        }
    }
