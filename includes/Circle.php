<?php
include_once 'Shape.php';
class Circle extends Shape {

    const SHAPE_TYPE = 3;
    protected $radius;

    /*
    Constructor accepts a radius parameter and intializes $radius.
    */
    function __construct($radius) {
        parent::__construct($length = null, $width = null);
        $this->radius = $radius;
    }

    /*
    area method to calculate and return the area of the circle (PI x r x r)
    */
    public function area() {
        $pi = pi();
        $area = $pi * pow($this->radius, 2);
        return $area;
    }

    public function perimeter() {
        $pi = pi();
        $perimeter = $pi * $this->radius* 2;
        return $perimeter;
    }
    /*
    getFullDescription method to return string describing the shape
    Uses getId() to get the Id because that's a protected property of the parent class
    */
    public function getFullDescription() {
        return get_class($this)  . $this->name . ' -> with radius: ' . $this->radius. ' ->  has premeter equal to : ' . $this->perimeter().'-> and has area equal to : ' . $this->area();
    }
}