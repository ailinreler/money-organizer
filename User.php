<?php

  require 'VariableExpenses.php';
  require 'FixedExpenses.php';
  require 'BankAccount.php';

  class User{

    public $name;
    public $variableExpenses;
    public $fixedExpenses;
    public $bankAccount;


    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    public function getName()
    {
      return $this->name;
    }

    public function setVariableExpenses(VariableExpenses $variableExpenses)
    {
      $this->variableExpenses = $variableExpenses;
      return $this;
    }


    public function setFixedExpenses(FixedExpenses $fixedExpenses)
    {
      $this->fixedExpenses = $fixedExpenses;
      return $this;
    }

    public function addVaribleExpenses($value)
    {
      $this->variableExpenses->total += $value;
      return $this;
    }

    public function setBankAccount(BankAccount $bankAccount)
    {
      $this->bankAccount = $bankAccount;

      return $this;
    }



    public function setBankAmount($value)
    {
      $this->$bankAmount = $value;
    }

  }


$usuario = new User;
$usuario->setName('Ailo');
$usuario->setVariableExpenses(new VariableExpenses(500, 'celular'));
$usuario->setVariableExpenses(new VariableExpenses(700, 'caramelos'));
$usuario->setFixedExpenses(new FixedExpenses(1000, 'alquiler'));
$usuario->setBankAccount(new BankAccount('banco galicia'));
$usuario->bankAccount->setAmount(320);
var_dump($usuario->variableExpenses->getTotal());
var_dump($usuario->bankAccount->amount);
var_dump($usuario->bankAccount->accountName);
// var_dump($usuario->setAccountNumber(121212));
var_dump($usuario->variableExpenses->getName(), $usuario->variableExpenses->getTotal());
var_dump($usuario->fixedExpenses->getName(), $usuario->fixedExpenses->getTotal());
