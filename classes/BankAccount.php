<?php

abstract class User {
     public $data=array();

     abstract public function balance();
}
class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance()
    {
 
    }

    public function deposit(Money $amount)
    {
        //implement this method
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
    }
    public function withdraw(Money $amount)
    {
    }
}