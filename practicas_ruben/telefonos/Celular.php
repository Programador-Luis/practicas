<?php

require "Smartphone.php";

class Celular extends Telefonos {

    protected $alambrico = false;


    public function __construct(
        string $marca,
        string $modelo
    )
    {
        parent::__construct($marca, $modelo);
    }

    

}