<?php

namespace Shapes;

class Square extends ShapeBase
{
    private $lengthSide = 0;
    protected $countSides = 4;
    protected $countAngles = 4;

    /**
     * Square constructor.
     * @param float $lengthSide
     */
    public function __construct(float $lengthSide)
    {
        $this->setLengthSide($lengthSide);
    }

    /**
     * @return float|int
     */
    public function getArea(): float
    {
        return pow($this->getLengthSide(), 2);
    }

    public function getPerimeter(): float
    {
        return $this->getLengthSide() * $this->getCountSides();
    }

    /**
     * @return float
     */
    public function getLengthSide(): float
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
