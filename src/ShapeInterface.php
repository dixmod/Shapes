<?php

declare(strict_types=1);

namespace Dixmod\Shapes;

interface ShapeInterface
{
    /**
     * @return float
     */
    public function getArea(): float;

    /**
     * @return float
     */
    public function getPerimeter(): float;
}
