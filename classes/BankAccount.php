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
        $amt=$amount->amount;
        $amt=(int) $amt;
        $bal=$this->balance;
        if($bal<$amt)
           throw new Exception('Withdrawl amount larger than balance');
        else
            $this->balance=$bal-$amt;
        $account->balance=$account->balance+$amt;
    }
    public function withdraw(Money $amount)
    {
        $amt=$amount->amount;
        $amt=(int) $amt;
        $bal=$this->balance;
        
        if(is_int($bal))
            $bal=(int) $bal;
        else
            $bal=(int) $bal->amount;

        if($bal<$amt)
           throw new Exception('Withdrawl amount larger than balance');
        else
            $this->balance=$bal-$amt;
    }
}