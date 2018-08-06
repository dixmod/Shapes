<?php

namespace Dixmod\Shapes;

class Square extends Rectangle
{
    /**
     * Square constructor.
     * @param float $lengthSide
     */
    public function __construct(float $lengthSide)
    {
        $this->setLengthsSides(array_fill(0, $this->getCountSides(), $lengthSide));
    }
}
