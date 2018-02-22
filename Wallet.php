<?php

  class Wallet{


    public $amount;
    public $total;



    public function setAmount($value)
    {
      return $this->amount = $value;
    }

    public function addAmount($value)
    {
      $this->total += $value;
      return $this;
    }

    public function getAmount()
    {
      return $this->amount;
    }

    public function editTotal($value)
    {
      $this->total = $value;
    }


  }
