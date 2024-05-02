<?php
class Car {
    private $model;

    public function __construct($model) {
        $this->model = $model;
        echo "A new car object has been created with model: $model";
    }

    public function getModel() {
        return $this->model;
    }
}

$car = new Car("Toyota Camry");
echo $car->getModel(); // Output: Toyota Camry
