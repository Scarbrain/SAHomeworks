<?php

class Mobile {


    private $model;
    private $manufacturer;
    private $owner;
    private $batteryType;
    private $screenType;

    public function CellPhone($model, $manufacturer, $owner, $batteryType, $screenType) {
        $this->model = $model;
        $this->manufacturer = $manufacturer;
        $this->owner = $owner;
        $this->batteryType = $batteryType;
        $this->screenType = $screenType;
    }

    public function getModel() {
        echo 'The model is: ' . $this->model;
    }

    public function getManufacturer() {
        echo $this->manufacturer;
    }

    public function getOwner() {
        echo $this->owner;
    }

    public function getBatteryType() {
        echo $this->batteryType;
    }

    public function getScreenType() {
        echo $this->screenType;
    }

    public function getClassName() {
        echo 'The class name is: ' . get_class($this);
    }
}

$className = new Mobile();
$className->CellPhone('8800', 'nokia', 'Pencho', 'liion', 'multytouch');
$className->getClassName();
echo '<br/>';
$className->getModel();