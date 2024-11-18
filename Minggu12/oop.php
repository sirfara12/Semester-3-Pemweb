<?php
class Car{
    public $brand;

    public function startEngine(){
        echo "Engine started!";
    }
}

$car1 = new Car();
$Car2->brand = "Toyota";

$Car2 = new Car();
$Car2->brand = "Honda";

$car1->startEngine();
echo $car1->brand;
