<?php
declare(strict_types=1);

abstract class Animals{

    protected string $name;

    function __costruct(string $name){
      $this->name=$name;
    }
   
  abstract public function makeSound();

}