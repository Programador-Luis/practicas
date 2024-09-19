<?php

class Person{
    private $firstName;
    private $lastName;
    private $nickName;
    private $changedNickName = 0;
    private $birthDate;

    public function __construct($firstName, $lastName, $birthDate){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
    
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }


    public function setNickName($nickName) {

        if ($this->changedNickName >= 2) {
            throw new Exception("El nickname solo se puede cambiar dos veces.");
        }
        
        if (strlen($nickName) <= 2) {
            throw new Exception("El nickname debe tener al menos 2 caracteres.");
        }
        
        
        if ($nickName === $this->firstName || $nickName === $this->lastName) {
            throw new Exception("El nickname no puede ser igual al nombre o apellido.");
        } 

        $this->nickName = $nickName;
        $this->changedNickName++;
    }
    
    public function getNickName(){
        return $this->nickName;
    }

    public function getAge() {
        
        $birthDate = new DateTime($this->birthDate);
        
        $today = new DateTime();
        
        $age = $today->diff($birthDate);

        return $age->y;
    }


    public function getFullName(){
        return $this->firstName . " " . $this->lastName;
    }

}

$person1 = new Person('Luis', 'González', '2001/12/29');

$person1->setNickName('Carlugo');
$person1->setNickName('Carlugo29');

echo "El nombre y apellido es:" . " " . $person1->getFullName() . "</br>";

echo "El NickName es:" . " " . $person1->getNickName() . "</br>";

echo "La edad es:" . " " . $person1->getAge() . " " . "años";



?>