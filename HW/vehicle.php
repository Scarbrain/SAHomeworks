<?php

class Vehicle {

    public $type = '';
    public $color = '';
    public $year = '';
    public $power = '';
    public $nationality = '';

    public function method1($type) {
        echo $type;
    }
    public function method2($color) {
        echo $color;
    }
    public function method3($year) {
        echo $year;
    }
    public function method4($power) {
        echo $power;
    }
    public function method5($nationality) {
        echo $nationality;
    }

}

//Vehicle::method1('');

$class = new Vehicle();
$class->method1('Benz');
echo '<br/>';
$class->method2('asdfg');