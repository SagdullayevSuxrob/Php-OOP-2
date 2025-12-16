<?php

class Car {
    // property, attribute
    public $model;
    public $year;

    // method
    public function drive(){
        return 'Driving...';
    }

    public function getFuel(){
        return 'Fueling...';
    }

    public function setModel($model){
        $this-> model = $model;
    }
}

$bmw = new Car();

$bmw->setModel('BMW M5 Competetion');
echo $bmw->model;

