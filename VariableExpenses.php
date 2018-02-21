<?php

  require 'Expenses.php';


  class VariableExpenses implements Expenses{

    public $name;

    public $amount = [];

    public $total = 0;


    public function __construct($value, $name)
    {

      $this->name = $name;

      $this->amount[] = $value;

      return $this->total += $value;

    }

    public function add($value)
    {
      $this->amount[] = $value;

      return $this->total += $value;
    }

    public function getTotal()
    {
      return $this->total;
    }


  }
