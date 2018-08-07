<?php

declare(strict_types=1);

include_once './vendor/autoload.php';

use Dixmod\Shapes\{
    Circle,
    Rectangle,
    Square,
    Triangle
};

use PHPUnit\Framework\TestCase;

final class TestShapes extends TestCase
{
    private $circle;
    private $rectangle;
    private $square;
    private $triangle;

    public function __construct()
    {
        parent::__construct();
        $this->circle = new Circle(10);
        $this->rectangle = new Rectangle(12, 10);
        $this->square = new Square(12);
        $this->triangle = new Triangle(15, 4, 4);
    }

    public function testCircleArea()
    {
        $this->assertEquals($this->circle->getArea(), 314.15926535898);
    }

    public function testCirclePerimeter()
    {
        $this->assertEquals($this->circle->getPerimeter(), 62.831853071796);
    }

    public function testRectangleArea()
    {
        $this->assertEquals($this->rectangle->getArea(), 120);
    }

    public function testRectanglePerimeter()
    {
        $this->assertEquals($this->rectangle->getPerimeter(), 44.0);
    }

    public function testSquareArea()
    {
        $this->assertEquals($this->square->getArea(), 144);
    }

    public function testSquarePerimeter()
    {
        $this->assertEquals($this->square->getPerimeter(), 48.0);
    }

    public function testTriangleArea()
    {
        $this->assertEquals($this->triangle->getArea(), 47.5821657766857);
    }

    public function testTrianglePerimeter()
    {
        $this->assertEquals($this->triangle->getPerimeter(), 23);
    }
}
