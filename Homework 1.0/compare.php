<?php


$a = 5;
$b = 6;
//$big = ($a > $b) ? $a : $b;
//echo $big;

if(($a > $b) == true) {
    //echo "> - true"; 
    echo $a . " > " .  $b . " - true.";
    echo "<br/>";
}
else {
    //echo "> - false";
    echo $a . " > " .  $b . " - false.";
    echo "<br/>";
}

if(($a < $b) == true) {
    //echo " < - true";
    echo $a . " < " .  $b . " - true.";
    echo "<br/>";
}
else {
     //echo " < - false";
     echo $a . " < " .  $b . " - false.";
     echo "<br/>";
}

if(($a == $b) == true) {
    //echo " < - true";
    echo $a . " = " .  $b . " - true.";
    echo "<br/>";
}
else {
     //echo " < - false";
     echo $a . " = " .  $b . " - false.";
     echo "<br/>";
}

if(($a <= $b) == true) {
    //echo " < - true";
    echo $a . " <= " .  $b . " - true.";
    echo "<br/>";
}
else {
     //echo " < - false";
     echo $a . " <= " .  $b . " - false.";
     echo "<br/>";
}

if(($a >= $b) == true) {
    //echo " < - true";
    echo $a . " >= " .  $b . " - true.";
    echo "<br/>";
}
else {
     //echo " < - false";
     echo $a . " >= " .  $b . " - false.";
     echo "<br/>";
}

if(($a != $b) == true) {
    //echo " < - true";
    echo $a . " != " .  $b . " - true.";
    echo "<br/>";
}
else {
     //echo " < - false";
     echo $a . " != " .  $b . " - false.";
     echo "<br/>";
}