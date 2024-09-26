<?php

class Product{

    private $name;
    private $price;
    private $percent;


    public function __construct(
        string $name,
        float $price,
        int $percent
    )
    {
        $this->name = $name;
        $this->price = $price;
        $this->percent = $percent;
    }

    public function percentNew($percent)
    {
        $this->percent = $percent;
    }


    public function applyDiscount()
    {
        $mount = $this->price * ($this->percent / 100);

        $priceTotal = $this->price - $mount;

        return $priceTotal;
    }


    public function showInfo()
    {
        return "{$this->name} tiene un costo de {$this->applyDiscount()}";
    }



}

$cocacola = new Product('Coca Cola', 100, 20);

$cocacola->percentNew(50);

echo "{$cocacola->showInfo()}";


