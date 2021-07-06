<?php


class Rhombus extends Shapes
{
    public float $edge;
    public float $degree=33;

    public function __construct(float $edge)
    {
        $this->edge = $edge;
    }

    public function calculateArea (float $edge, float $degree): float
    {
        return round(pow($edge, 2) * sin(deg2rad($degree)),1);
    }


}