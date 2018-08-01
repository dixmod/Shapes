<?php

namespace Shapes;

include_once 'ShapeBase.php';


class Circle extends ShapeBase
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    public function getArea(): float
    {
        return M_PI * pow($this->getRadius(), 2);
    }

    public function getPerimeter(): float
    {
        return 2 * M_PI * $this->getRadius();
    }

    /**
     * @return mixed
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}
