<?php

  class BankAccount{


    public $accountName;

    public $amount;


    public function __construct($accountName)
    {
      return $this->accountName = $accountName;
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
