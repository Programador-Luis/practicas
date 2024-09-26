<?php

class Rectangle{

    private $broad;
    private $high;


    public function __construct(
        float $broad,
        float $high
    )
    {
        $this->broad = $broad;
        $this->high = $high;
    }

    public function calculateArea()
    {
        return $this->broad * $this->high;
    }

    public function calculatePerimeter()
    {
        return 2 * ($this->broad + $this->high);
    }




}

$calculation = new Rectangle(10, 5);

echo "<h3> El área de tu rectángulo es: {$calculation->calculateArea()} </h3>";

echo "<h3> El perímetro de tu rectángulo es: {$calculation->calculatePerimeter()} </h3>";