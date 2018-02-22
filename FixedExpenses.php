<?php


  class FixedExpenses extends Expenses{

    public $name;

    public $dueDate;

    public $amount;

    public $total = 0;


    public function __construct($value, $name)
    {

      $this->name = $name;

      $this->amount = $value;

      $this->total += $value;

      return $this;

    }

    public function getName()
    {
      return $this->name;
    }

    public function editName($name)
    {
      $this->name = $name;
    }


    public function add($value)
    {
      $this->amount = $value;

      return $this->total += $value;
    }

    public function getTotal()
    {
      return $this->total;
    }




  }
