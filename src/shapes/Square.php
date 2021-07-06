<?php


class Square extends Shapes
{
    public float $edge;

    public function __construct(float $edge)
    {
        if($edge>0) {
            $this->edge = $edge;
        } else{
            throw new InvalidArgumentException("Edge cannot be less than 0");
        }
    }
}