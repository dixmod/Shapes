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
    private const DELTA = 0.5;

    public function __construct()
    {
        parent::__construct();

        $this->circle = new Circle(
            10 // radius
        );

        $this->rectangle = new Rectangle(
            12, // length side A
            10  // length side B
        );

        $this->square = new Square(
            12 // length side
        );

        $this->triangle = new Triangle(
            15, // length side A
            4,  // length side B
            4   // length side C
        );
    }

    public function testCircleArea()
    {
        $this->assertEquals($this->circle->getArea(), 314, '', self::DELTA);
    }

    public function testCirclePerimeter()
    {
        $this->assertEquals($this->circle->getPerimeter(), 62.8, '', self::DELTA);
    }

    public function testRectangleArea()
    {
        $this->assertEquals($this->rectangle->getArea(), 120, '', self::DELTA);
    }

    public function testRectanglePerimeter()
    {
        $this->assertEquals($this->rectangle->getPerimeter(), 44, '', self::DELTA);
    }

    public function testSquareArea()
    {
        $this->assertEquals($this->square->getArea(), 144, '', self::DELTA);
    }

    public function testSquarePerimeter()
    {
        $this->assertEquals($this->square->getPerimeter(), 48, '', self::DELTA);
    }

    public function testTriangleArea()
    {
        $this->assertEquals($this->triangle->getArea(), 47.5, '', self::DELTA);
    }

    public function testTrianglePerimeter()
    {
        $this->assertEquals($this->triangle->getPerimeter(), 23, '', self::DELTA);
    }
}
