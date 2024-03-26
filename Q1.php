<?php

class rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {          // constructor
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea() {
        return $this->length * $this->width;                //methods for calculating perimeter
    }
    public function getLength() {
        return $this->length;                               
    }
    public function setLength($length) {
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }
    public function calculatePerimeter(){
        return $this->length + $this->width;
    }
}
$rectangle = new Rectangle(100, 200);
// echo json_encode($rectangle->calculateArea());
echo "Area: " . $rectangle->calculateArea() . "<br>";
echo "Perimeter: " . $rectangle->calculatePerimeter() . "<br>";

echo "<div><b>this is a div</b></div>"

?>
