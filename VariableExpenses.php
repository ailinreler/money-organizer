<?php

  require 'Expenses.php';

  class VariableExpenses implements Expenses{


    public $amount = [];

    public $total = 0;


    public function __construct($value)
    {

      $this->amount[] = $value;

      return $this->total += $value;
    }

    public function add($value)
    {
      $this->amount[] = $value;

      return $this->total += $value;
    }


  }
