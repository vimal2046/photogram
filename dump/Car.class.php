<?php

class Car {
    public $brand;
    public $color;

    public function drive() {
        return "Driving a " . $this->brand;
    }
}

$car1 = new Car;

// Correct way to assign property
$car1->brand = "Volvo";

// Correct way to call the method
echo $car1->drive();