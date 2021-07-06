<?php


class Rectangle extends Shapes
{
    public float $length;
    public float $width;


    public function __construct(float $length, float $width)
    {
        if($length>0) {
            $this->length = $length;
        } else{
            throw new InvalidArgumentException("Length cannot be less than 0");
        }

        if($width>0) {
            $this->width = $width;
        } else{
            throw new InvalidArgumentException("Width cannot be less than 0");
        }
    }

}