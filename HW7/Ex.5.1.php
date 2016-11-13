<?php

function matrix($n) {

    for ($row = 1; $row <= $n; $row++) {


        for ($col = $row; $col <= $row+($n-1); $col++) {

            echo $col . " ";

        }

        echo $row . "<br/> ";
        
    }
}

matrix(6);

//echo chop($row," ");