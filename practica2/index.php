<?php

function show($message){
    echo "<h2>$message</h2>";
}

abstract class Unit {
    protected $hp = 40;
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getHp(){
        return $this->hp;
    }

    public function setHp($points){
        $this->hp = $points;

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }

    public function move($direction){
        show("{$this->name} camina hacia $direction");
    }

    abstract public function attack(Unit $opponent);

    public function die(){
        show("{$this->name} ha muerto");
    }
}

class Soldier extends Unit {
    public function attack(Unit $opponent){
        show("{$this->name} corta a {$opponent->getName()} en dos");
        $opponent->die();
    }
}

class Archer extends Unit {

    protected $damage = 20;


    public function attack(Unit $opponent){
        show("{$this->name} dispara una flecha a {$opponent->getName()}");

        $opponent->setHp($opponent->getHp() - $this->damage);

        if ($opponent->getHp() <= 0){
            $opponent->die();
        }

        
    }
}

$joako = new Soldier('Joako');
$carlugo = new Archer('Carlugo');

$carlugo->attack($joako);

$carlugo->attack($joako);

?>
