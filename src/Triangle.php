<?php

declare(strict_types=1);

namespace Dixmod\Shapes;

class Triangle extends ShapeBase
{
    protected $countSides = 3;
    protected $countAngles = 3;

    /**
     * Triangle constructor.
     * @param $lengthsSidesA
     * @param $lengthsSidesB
     * @param $lengthsSidesC
     */
    public function __construct($lengthsSidesA, $lengthsSidesB, $lengthsSidesC)
    {
        $this->setLengthsSides([
            $lengthsSidesA,
            $lengthsSidesB,
            $lengthsSidesC,
        ]);
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return 1 / 2 * $this->lengthsSides[0] * $this->getHeight();
    }

    /**
     * @return float|int
     */
    public function getHeight(): float
    {
        $halfPerimeter = $this->getPerimeter() / 2;
        return (2 * sqrt($halfPerimeter
                    * abs($halfPerimeter - $this->lengthsSides[0])
                    * abs($halfPerimeter - $this->lengthsSides[1])
                    * abs($halfPerimeter - $this->lengthsSides[2])
                )) / $this->lengthsSides[0];
    }
}
