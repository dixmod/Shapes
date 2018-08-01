<?php

namespace Shape;

include_once 'ShapeInterface.php';

abstract class ShapeBase implements ShapeInterface
{
    protected $countSides = 0;
    protected $countAngles = 0;

    /**
     * @return int
     */
    public function getCountSides()
    {
        return $this->countSides;
    }

    /**
     * @return int
     */
    public function getCountAngles()
    {
        return $this->countAngles;
    }
}

