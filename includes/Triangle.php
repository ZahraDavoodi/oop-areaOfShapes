<?php
include_once 'Shape.php';
class Triangle extends Shape {
    const SHAPE_TYPE = 4;
    protected $length;
    protected $width;
    function __construct($length, $width,$side1,$side2,$side3) {
        parent::__construct($length, $width);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function area() {

        $area = ($this->length * $this->width)/2;
        return $area;
    }
    public function perimeter() {
        $perimeter =$this->side1+$this->side2+$this->side3 ;
        return $perimeter;
    }
    public function getFullDescription() {
        return get_class($this)  . $this->name . ' -> with base and height and sides : ' . $this->width.','.$this->length.','.$this->side1.','.$this->side2.','.$this->side3. ' ->  has premeter equal to : ' . $this->perimeter().'-> and has area equal to : ' . $this->area();
    }
}