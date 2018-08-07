<?php

declare(strict_types=1);

namespace Dixmod\Shapes;

abstract class ShapeBase implements ShapeInterface
{
    protected $countSides = 0;
    protected $countAngles = 0;
    protected $lengthsSides = [];

    /**
     * @return int
     */
    protected function getCountSides(): int
    {
        return $this->countSides;
    }

    /**
     * @return int
     */
    protected function getCountAngles(): int
    {
        return $this->countAngles;
    }

    /**
     * @param array $lengthsSides
     */
    protected function setLengthsSides(array $lengthsSides)
    {
        $this->lengthsSides = array_slice($lengthsSides, 0, $this->getCountSides());
    }

    /**
     * @return array
     */
    protected function getLengthsSides(): array
    {
        return $this->lengthsSides;
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return array_sum($this->getLengthsSides());
    }
}
