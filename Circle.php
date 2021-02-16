<?php

class Circle extends Shape
{
    const SHAPE_TYPE = 3;
    protected float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calcCircleArea()
    {
        $area = pi() * ($this->radius * $this->radius);
        return $area;
    }
}