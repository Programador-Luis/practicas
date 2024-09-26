<?php

class BankAccount {

    private $holder;
    private $balance;


    public function __construct(
        string $holder,
        int $balance,
    )
    {
        $this->holder = $holder;
        $this->balance = $balance;
    }

    public function holder()
    {
        return $this->holder;
    }


    public function deposit($amount)
    {
        if ($amount > 0)
        {
            $this->balance += $amount;

            echo "Haz depositado " . $amount . " a tu cuenta satisfactoriamente. </br>";
        }else{
            echo "El monto ha depositar debe ser mayor a cero. </br>";
        }
        
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance)
        {
            $this->balance -= $amount;

            echo "Haz retirado " . $amount . " de tu cuenta satisfactoriamente. </br>";
        }else{
            echo "El monto ha retirar debe ser mayor a cero o intentas retira más de lo que tienes xddd.</br>";
        }
        
    }

    public function showBalance()
    {
        return $this->balance;
    }



}

$bank = new BankAccount('Luis', 10);

echo "El títular de la cuenta es: " . $bank->holder() . "</br>";

$bank->deposit(40);

$bank->withdraw(30);

echo "Saldo actual: " . $bank->showBalance() . "</br>";
