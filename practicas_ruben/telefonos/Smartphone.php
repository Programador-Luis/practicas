<?php

final class Smartphone extends Celular {

    public $alambrico = false;
    public $internet = true;


    public function __construct(
        string $marca,
        string $modelo
    )
    {
        parent::__construct($marca, $modelo);
    }

    public function information()
    {
        return '<ul>
            <li>Marca: ' . $this->marca .'</li>
            <li>Modelo: ' . $this->modelo .'</li>
            <li>Comunicación: ' . $this->comunicacion . '</li>
            <li>Dispositivo con acceso a internet</li>
        </ul>';
    }
    

}