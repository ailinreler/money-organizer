<?php

  class BankAccount{


    public $accountNumber;

    public $amount;


    public function __construct($accountNumber, $amount = 0)
    {
      return $this->accountNumber = $accountNumber;
    }


    public function setAmount($value)
    {
      return $this->amount = $value;
    }


    public function getAmount()
    {
      return $this->amount;
    }


    public function add($value)
    {
      return $this->amount += $value;
    }


  }
