<?php

declare(strict_types=1);

namespace Dixmod\Shapes;

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
     * @return float
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
