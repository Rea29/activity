<?php

class Vehicle {
    private $make;
    private $model;
    private $year;

    
    public function __construct($make, $model, $year) {     // Constructor
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

   
    public function getDetails() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";         //methods were vehicles details
        echo "Year: " . $this->year . "<br>";
    }

   
    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }
}
$vehicle = new Vehicle("Honda", "civic", 2000);
$vehicle->getDetails();

