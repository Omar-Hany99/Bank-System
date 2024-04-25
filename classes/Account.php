<?php
class Account
{
    public int $number;
    public string $type;
    protected float $balance;

    public function __construct(int $number , string $type , float $balance)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }
    public function deposit($amout) :float
    {
        return $this->balance += $amout;
    }
    public function withdraw($amout) :float
    {
        return $this->balance -= $amout;
    }
    public function getBalance() :float
    {
        return $this->balance;
    }
}

$acc = new Account(1232312,'savings' , 100);
$acc2 = new Account(31232312,'Savings' , 100);