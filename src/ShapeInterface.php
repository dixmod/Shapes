<?php

declare(strict_types=1);

namespace Dixmod\Shapes;

interface ShapeInterface
{
    /**
     * Calculating the area of a shape
     * @return float
     */
    public function getArea(): float;

    /**
     * Calculating the perimeter of a shape
     * @return float
     */
    public function getPerimeter(): float;
}
