<?php

class Vehicle{

    private $brand;
    private $model;
    private $speed;

    public function __construct(
        string $brand,
        string $model,
        float $speed,
    )
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function accelerate($amount)
    {
        if($amount > 0) {
            $this->speed += $amount;

            echo "Haz acelerado el auto. </br>";
        }
    }


    public function curb($amount)
    {
        if($amount > 0 && $amount <= $this->speed) {
            $this->speed -= $amount;

            echo "Haz frenado el auto. </br>";
        }
    }


    public function finalSpeed(){
        return $this->speed;
    }

    public function autoFull()
    {
        return "{$this->brand} del modelo {$this->model}";
    }

}

class Coche extends Vehicle{
    private $numero_puertas;

    public function __construct(
        int $numero_puertas
    )
    {
        $this->numero_puertas = $numero_puertas;
    }
}


$auto = new Vehicle('Toyota', 'Volador', 110.5);

echo "Estás manejando un {$auto->autoFull()} </br>";

$auto->curb(80);

echo "La velocidad final es de: " . $auto->finalSpeed();

