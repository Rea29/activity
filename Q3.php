<?php

class Vehicle {
    private $brand;
    private $model;
    private $year;

    
    public function __construct($brand, $model, $year) {     // Constructor
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

   
    public function getDetails() {
        echo "brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";         //methods were vehicles details
        echo "Year: " . $this->year . "<br>";
    }

   
    public function getbrand() {
        return $this->brand;
    }

    public function setbrand($brand) {
        $this->brand = $brand;
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

