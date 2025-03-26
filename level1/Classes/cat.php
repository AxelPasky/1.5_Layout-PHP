<?php
declare(strict_types=1);

class Cat extends Animals {

    protected string $name;

    function __construct (string $name){

        $this->name=$name;
    }

    function getName(){
        return $this->name;
      }
    
    function makeSound(): void{
        echo "Miaooo" . PHP_EOL;
    }
}