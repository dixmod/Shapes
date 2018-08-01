<?php

namespace Shapes;

class Triangle extends ShapeBase
{
    private $lengthsSides = [0, 0, 0];
    protected $countSides = 3;
    protected $countAngles = 3;

    /**
     * Triangle constructor.
     * @param mixed ...$lengthsSides
     */
    public function __construct(...$lengthsSides)
    {
        $this->setLengthsSides($lengthsSides);
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

    /**
     * @return float|int
     */
    public function getPerimeter(): float
    {
        return array_sum($this->getLengthsSides());
    }

    /**
     * @return array
     */
    public function getLengthsSides(): array
    {
        return $this->lengthsSides;
    }

    /**
     * @param array $lengthsSides
     */
    public function setLengthsSides(array $lengthsSides)
    {
        $this->lengthsSides = $lengthsSides;
    }
}
