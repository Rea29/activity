<?php

class Circle {
    private $radius;

   
    public function __construct($radius) {
        $this->radius = $radius;                         // Constructor
    }

    
    public function calculateArea() {
        return M_PI * pow($this->radius, 2);            // Method to calculate area
    }                                                   //pi = to 3.14159

    
    public function calculateCircumference() {          // Method to calculate circumference (perimeter)
        return 2 * M_PI * $this->radius;                //calculates the circumference of the circle using the formula: circumference = 2 * π * radius
    }

    
    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }
}
$circle = new Circle(10);
echo "Area: " . $circle->calculateArea() . "<br>";
echo "Circumference: " . $circle->calculateCircumference() . "<br>";

