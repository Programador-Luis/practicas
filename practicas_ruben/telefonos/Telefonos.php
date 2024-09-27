<?php

require "Celular.php";


class Telefonos {

    protected $marca;
    protected $modelo;
    protected $alambrico = true;
    protected $comunicacion;


    public function __construct(
        string $marca,
        string $modelo,
    )
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->comunicacion = ($this->alambrico) ? 'Es alambrico' : 'Es inalambrico';
        
    }

    public function call()
    {
        return 'Riiiing Riiiiing';
    }


    public function information()
    {
        return "<ul>

            <li>Marca: {$this->marca}</li>
            <li>Modelo: {$this->modelo}</li>
            <li>Comunicación: {$this->comunicacion}</li>
        
        </ul>";
    }


}

$telefono = new Telefonos('CANTV', 'ABA');

echo $telefono->call();

echo $telefono->information();



$celular = new Celular('Nokia', 'RTX');

echo $celular->call();

echo $celular->information();


$SmartPhone = new Smartphone('Samsung', 'A24');

echo $SmartPhone->call();

echo $SmartPhone->information();