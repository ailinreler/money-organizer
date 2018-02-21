<?php

  class Wallet{


    public $amount;



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
