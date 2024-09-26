<?php

class Person {
    private $name;
    private $age;


    public function __construct(
        string $name,
        int $age,

    )
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function age(): int
    {
        return $this->age;
    }


}

$call = new Person('Luis', 22);

echo "Hola, mi nombre es " . $call->name() . " y tengo " . $call->age() . " años. </br>";

