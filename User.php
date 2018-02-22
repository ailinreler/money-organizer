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

    public function addVariableExpenses(VariableExpenses $variableExpenses)
    {
      $this->variableExpenses = $variableExpenses;
      return $this;
    }


    public function addFixedExpenses(FixedExpenses $fixedExpenses)
    {
      $this->fixedExpenses = $fixedExpenses;
      return $this;
    }

    public function addBankAccount(BankAccount $bankAccount)
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
$usuario->addVariableExpenses(new VariableExpenses(500, 'celular'));
$usuario->addFixedExpenses(new FixedExpenses(1000, 'alquiler'));
$usuario->addBankAccount(new BankAccount('banco galicia'));
$usuario->bankAccount->setAmount(320);
var_dump($usuario->variableExpenses->getTotal());
var_dump($usuario->bankAccount->amount);
var_dump($usuario->bankAccount->accountName);
// var_dump($usuario->setAccountNumber(121212));
