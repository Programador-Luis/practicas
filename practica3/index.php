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


    public function move($direction){
        show("{$this->name} camina hacia $direction");
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage){

        $this->hp = $this->hp - $this->absorbDamage($damage);

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0){
            $this->die();
        }

    }

    public function die(){
        show("{$this->name} ha muerto");

        exit();
    }

    protected function absorbDamage($damage){
        return $damage;
    }
    

}

class Soldier extends Unit {

    protected $damage = 40;
    protected $armor;

    public function __construct($name){

        parent::__construct($name);
    
    }

    public function setArmor(Armor $armor = null){
        $this->armor = $armor;

        show("{$this->name} ha adquirido una armadura");
    }

    public function attack(Unit $opponent){
        show("{$this->name} ataca con la espada a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }


    protected function absorbDamage($damage){
        if($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}

class Archer extends Unit {

    protected $damage = 20;


    public function attack(Unit $opponent){
        show("{$this->name} dispara una flecha a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);

    }

}

interface Armor{
    public function absorbDamage($damage);
}


class BronzeArmor implements Armor{

    public function absorbDamage($damage){
        return $damage / 2;
    }
}


$armor = new BronzeArmor();

$joako = new Soldier('Joako', $armor);
$carlugo = new Archer('Carlugo');

$carlugo->attack($joako);

$joako->setArmor($armor);

$carlugo->attack($joako);

$joako->attack($carlugo);

?>


- Refacturizar para que el Archer tenga armadura, crear una armadura elevación que permita evadir la mitad de los ataques.

- Refactorizar de que nuestro oponente no tenga puntos negativos de vida.

- Hacer que los Soldier y Archer tengan diferentes armas