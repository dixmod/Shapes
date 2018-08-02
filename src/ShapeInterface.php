<?php

namespace Dixmod\Shapes;

interface ShapeInterface
{
    /**
     * @return mixed
     */
    public function getArea(): float;

    /**
     * @return mixed
     */
    public function getPerimeter(): float;
}
