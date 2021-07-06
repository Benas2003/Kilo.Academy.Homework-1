<?php


class Square extends Shapes
{
    public float $edge;

    public function __construct(float $edge)
    {
        $this->edge = $edge;
    }
}