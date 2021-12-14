<?php
include_once 'Shape.php';
class Square extends Shape {
    const SHAPE_TYPE = 3;
    protected $length;
    function __construct($length) {
        parent::__construct($length, $width = null);
        $this->length =$length;
    }
    public function area() {
        $area = $this->length * 2;
        return $area;
    }
    public function perimeter() {
        $perimeter = 4*($this->length);
        return $perimeter;
    }
}