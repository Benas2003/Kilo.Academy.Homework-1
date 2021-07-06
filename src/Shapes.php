<?php


class Shapes
{
    public function calculateArea(float $edge1, float $edge2): float
    {
        return $edge1*$edge2;
    }

    public function calculatePerimeter(float $edge1, float $edge2): float
    {
        return 2*$edge1+2*$edge2;
    }
}