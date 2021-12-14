<?php
include_once 'includes/Shape.php';
include_once 'includes/Circle.php';
include_once 'includes/Rectangle.php';
include_once 'includes/Square.php';
include_once 'includes/Triangle.php';



$myCircle = new Circle(2);

echo $myCircle->getFullDescription();
echo '<br/>';


$myRectangle = new Rectangle(2,5);
echo $myRectangle->getFullDescription();
echo '<br/>';


//Height and base and 3 sides
$myTrinangle = new Triangle(2,3,1,2,3);
echo $myTrinangle ->getFullDescription();
echo '<br/>';
//
$mysquare = new Square(2);
echo $mysquare->getFullDescription();
echo '<br/>';