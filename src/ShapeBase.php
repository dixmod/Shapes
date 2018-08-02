<?php

namespace Dixmod\Shapes;

abstract class ShapeBase implements ShapeInterface
{
    protected $countSides = 0;
    protected $countAngles = 0;

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
}
