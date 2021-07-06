<?php


class Circle extends Shapes
{
    public float $radius;
    public float $pi = 3.14;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(float $radius, float $pi): float
    {
        return $pi*pow($radius,2);
    }

    public function calculatePerimeter (float $radius, float $pi): float
    {
        return 2*$pi*$radius;
    }
}