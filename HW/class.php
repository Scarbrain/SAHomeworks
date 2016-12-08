<?php

class FirstClass {


    public function fun() {

        $myArray = array('one', 'two', 'three', 'four', 'five');
        //sort($myArray[]);

        foreach ($myArray as $key => $val) {
            echo $key . " = " . $val . "<br/>";
        }
    }



}
//FirstClass::fun();

$funn = new FirstClass();
$funn->fun();



?>