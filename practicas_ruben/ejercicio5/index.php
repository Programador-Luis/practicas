<?php

class Product{

    private $name;
    private $price;


    public function __construct(
        string $name,
        float $price,
    )
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function applyDiscount($percent)
    {
        $mount = $this->price * ($percent / 100);

        $priceTotal = $this->price - $mount;

        return $priceTotal;
    }


    public function showInfo()
    {
        return "{$this->name} tiene un costo de {$this->applyDiscount(50)}";
    }



}

$cocacola = new Product('Coca Cola', 100);

echo "{$cocacola->showInfo()}";


