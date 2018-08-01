<?php

namespace Shape;

class Square extends ShapeBase
{
    private $lengthSide = 0;
    protected $countSides = 4;
    protected $countAngles = 4;

    public function __construct(float $lengthSide)
    {
        $this->setLengthSide($lengthSide);
    }

    public function getArea()
    {
        return pow($this->getLengthSide(), 2);
    }

    public function getPerimeter()
    {
        return $this->getLengthSide() * $this->getCountSides();
    }

    /**
     * @return int
     */
    public function getLengthSide()
    {
        return $this->lengthSide;
    }

    /**
     * @param float $lengthSide
     */
    public function setLengthSide(float $lengthSide)
    {
        $this->lengthSide = $lengthSide;
    }
}