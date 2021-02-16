<?php

require 'Shape.php';
require 'Rectangle.php';
require 'Circle.php';

if(isset($argv[1])) {
    $name = substr($argv[1], strpos($argv[1], "=") + 1);
} else {
    $name = 'lucas';
}

if(isset($argv[2])) {
    $width = substr($argv[2], strpos($argv[2], "=") + 1);
} else {
    $width = 10;
}

if(isset($argv[3])) {
    $length = substr($argv[3], strpos($argv[3], "=") + 1);
} else {
    $length = 10;
}

if(isset($argv[4])) {
    $radius = substr($argv[4], strpos($argv[4], "=") + 1);
} else {
    $radius = 30;
}

if(isset($argv[3])) {
    $radius = substr($argv[3], strpos($argv[3], "=") + 1);
} else {
    $radius = 30;
}

echo "\nwidth -> ".$width;
echo "\nlength -> ".$length;
echo "\nradius -> ".$radius;

echo "\n----------------------- SHAPE ---------------------------\n";
$shape = new Shape($width, $length);
$shape->setName($name);
$area = $shape->calcArea();
echo "\n --> AREA " . $area;
$getShape = $shape->getShape();
echo "\n --> SHAPE -> " . print_r($getShape, true);

echo "\n----------------------- RECTANGLE ---------------------------\n";
$rectangle = new Rectangle($width, $length);
$rectangle->setName($name);
$area = $shape->calcArea();
echo "\n --> AREA " . $area;
$getShape = $rectangle->getShape();
echo "\n --> SHAPE -> " . print_r($getShape, true);

echo "\n----------------------- CIRCLE ---------------------------\n";
$circle = new Circle($radius);
$circle->setName($name);
$area = $circle->calcCircleArea();
echo "\n --> AREA " . $area;
$getShape = $circle->getShape();
echo "\n --> SHAPE -> " . print_r($getShape, true);