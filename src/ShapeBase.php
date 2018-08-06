<?php

namespace Dixmod\Shapes;

abstract class ShapeBase implements ShapeInterface
{
    protected $countSides = 0;
    protected $countAngles = 0;
    protected $lengthsSides = [];

    /**
     * @return int
     */
    public function getCountSides(): int
    {
        return $this->countSides;
    }

    /**
     * @return int
     */
    public function getCountAngles(): int
    {
        return $this->countAngles;
    }

    /**
     * @param array $lengthsSides
     */
    public function setLengthsSides(array $lengthsSides)
    {
        $this->lengthsSides = array_slice($lengthsSides, 0, $this->getCountSides());
    }

    /**
     * @return array
     */
    public function getLengthsSides(): array
    {
        return $this->lengthsSides;
    }

    /**
     * @return float|int
     */
    public function getPerimeter(): float
    {
        return array_sum($this->getLengthsSides());
    }
}
