<?php
require "src/Shapes.php";
require "src/shapes/Circle.php";
require "src/shapes/Rectangle.php";
require "src/shapes/Square.php";
require "src/shapes/Rhombus.php";

$circle = new Circle(2);
echo $circle->calculateArea($circle->radius, $circle->pi)." ";
echo $circle->calculatePerimeter($circle->radius, $circle->pi)." ";

$square = new Square(2);
echo $square->calculateArea($square->edge, $square->edge)." ";
echo $square->calculatePerimeter($square->edge, $square->edge)." ";

$rectangle = new Rectangle(2,3);
echo $rectangle->calculateArea($rectangle->length, $rectangle->width)." ";
echo $rectangle->calculatePerimeter($rectangle->length, $rectangle->width)." ";

$rhombus = new Rhombus(2);
echo $rhombus->calculateArea($rhombus->edge, $rhombus->degree)." ";
echo $rhombus->calculatePerimeter($rhombus->edge, $rhombus->edge)." ";
