<?php


class Rectangle extends Shapes
{
    public float $length;
    public float $width;


    public function __construct(float $length, float $width)
    {
        $this->length = $length;

        $this->width = $width;
    }

}