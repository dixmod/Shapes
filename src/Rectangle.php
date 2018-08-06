<?php

namespace Dixmod\Shapes;

class Rectangle extends ShapeBase
{
    protected $countSides = 4;
    protected $countAngles = 4;

    /**
     * Square constructor.
     * @param $lengthSideA
     * @param $lengthSideB
     */
    public function __construct(float $lengthSideA, float $lengthSideB)
    {
        $this->setLengthsSides([$lengthSideA, $lengthSideB, $lengthSideA, $lengthSideB]);
    }

    /**
     * @return float|int
     */
    public function getArea(): float
    {
        return $this->lengthsSides[0] * $this->lengthsSides[1];
    }
}
