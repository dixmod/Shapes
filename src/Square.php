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
        parent::__construct(
            $lengthSide,
            $lengthSide
        );
    }
}
