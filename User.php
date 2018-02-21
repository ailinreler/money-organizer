<?php

  require 'VariableExpenses.php';

  class User{

    public $name;
    public $expenses;


    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    public function getName()
    {
      return $this->name;
    }

    public function setExpenses(Expenses $expenses)
    {
      $this->expenses = $expenses;
      return $this;
    }

    public function addExpenses($value)
    {
      $this->expenses->total += $value;
      return $this;
    }

  }


$usuario = new User;
$usuario->setName('Ailo');
$usuario->setExpenses(new VariableExpenses(500, 'celular'));
$usuario->addExpenses(50);
$usuario->addExpenses(60);
var_dump($usuario->expenses->getTotal(), $usuario->getName());
