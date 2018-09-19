<?php

abstract class User {
     public $data=array();

     abstract public function balance();
}
class BankAccount implements IfaceBankAccount
{

    public $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance(){
        return  $this->balance;
    }

    public function deposit(Money $amount)
    {
        $amt=$amount->amount;
        $amt=(int) $amt;
        $bal=$this->balance;
        $bal=(int) $bal->amount;
        $this->balance=$bal+$amt;
    }

    public function transfer(Money $amount, BankAccount $account)
    {
       
    }
    public function withdraw(Money $amount)
    {
        
    }
}