<?php

  class User{

    public $name;

    public function setName($name)
    {
      return $this->name = $name;
    }

    public function getName()
    {
      return $this->name;
    }

  }
