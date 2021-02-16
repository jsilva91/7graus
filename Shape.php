<?php

class Shape
{
    public $name;
    protected float $width;
    protected float $length;
    private $id;
    const SHAPE_TYPE = 1;

    public function __construct(float $l, float $w)
    {
        $this->length = $l;
        $this->width = $w;
        $this->id = uniqid();
    }


    function getName()
    {
        return $this->name;
    }

    function setName($newName)
    {
        $this->name = $newName;
    }

    public function calcArea()
    {
        $area = $this->width * $this->length;

        return $area;
    }

    public static function getShapeType()
    {
        return get_called_class()::SHAPE_TYPE;
    }

    public function getShape()
    {
        $obj = new stdClass();
        $obj->name = $this->getName();

        $shapeType = $this->getShapeType();
        switch ($shapeType) {
            case 3:
                $obj->radius = $this->radius;
                $obj->id = uniqid();
                break;
            default:
                $obj->width = $this->width;
                $obj->length = $this->length;
                $obj->id = $this->id;
        }
        return $obj;
    }
}